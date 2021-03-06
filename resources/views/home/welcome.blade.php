@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="page-content__inner">

            @include('layouts.partials.breadcrumbs')

            <!-- course card resume sliders  -->
            <div class="section-small">
                @include('home.my-courses')
            </div>

            <div class="section-small pt-0">

                <div class="course-grid-slider" uk-slider>

                    <smooth-scroll text="Popular" highlight="Topics" link="course-path.html" ></smooth-scroll>

                    <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid">
                        <?php
                            $rand = ['android_#dd0031', 'node-js_#64d25d', 'html5_#f0653f', 'js-square_#f7df1e', 'angular_#dd0031'];
                        ?>
                        @foreach ($categories as $category)
                            <?php $value = preg_split('/_/', $rand[array_rand($rand)]); ?>
                            <li>
                                <a href="#" class="skill-card">
                                    <i class="icon-brand-{{ $value[0] }} skill-card-icon" style="color:{{ $value[1] }}"></i>
                                    <div>
                                        <h2 class="skill-card-title">{{ str_limit($category->name, 15) }}</h2>
                                        <p class="skill-card-subtitle"> {{ $category->courses->count() }} courses <span
                                                class="skill-card-bullet"></span> 3
                                            bundles
                                        </p>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                        <li>
                            <a href="#" class="skill-card">
                                <i class="icon-brand-node-js skill-card-icon" style="color:#64d25d"></i>
                                <div>
                                    <h2 class="skill-card-title"> NodeJS Courses</h2>
                                    <p class="skill-card-subtitle"> 5 courses <span
                                            class="skill-card-bullet"></span> 3
                                        bundles
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

            <div class="section-small pt-0">
                <episodes></episodes>
            </div>

            <div class="section-small pt-0">
                <div class="course-grid-slider" uk-slider>
                    <smooth-scroll highlight="Courses"></smooth-scroll>
                    <browse-courses :cat-courses="{{ $featuredCourses }}" m-class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid"></browse-courses>
                </div>
            </div>

            @include('layouts.partials.footer')
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .flex-wrapper {
            display: flex;
            flex-flow: row nowrap;
        }

        .single-chart {
            width: 33%;
            justify-content: space-around;
        }

        .circular-chart {
            display: block;
            margin: 10px auto;
            max-width: 80%;
            max-height: 250px;
        }

        .circle-bg {
            fill: none;
            stroke: #eee;
            stroke-width: 3.8;
        }

        .circle {
            fill: none;
            stroke-width: 2.8;
            stroke-linecap: round;
            animation: progress 1s ease-out forwards;
        }

        @keyframes progress {
            0% {
                stroke-dasharray: 0 100;
            }
        }

        .circular-chart.orange .circle {
            stroke: #ff9f00;
        }

        .circular-chart.green .circle {
            stroke: #4CC790;
        }

        .circular-chart.blue .circle {
            stroke: #3c9ee5;
        }

        .percentage {
            fill: #666;
            font-family: sans-serif;
            font-size: 0.5em;
            text-anchor: middle;
        }
    </style>
@endpush
