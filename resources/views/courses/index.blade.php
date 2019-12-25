@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="page-content__inner">
            @include('layouts.partials.breadcrumbs')

            <h1>All Courses</h1>

            <div class="section-small">
                <browse-courses x-class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid"/>
            </div>

            <!-- pagination menu -->
            <ul class="uk-pagination my-5 uk-flex-center" uk-margin>
                <li><a href="#"><span uk-pagination-previous></span></a></li>
                <li class="uk-disabled"><span>...</span></li>
                <li><a href="#">4</a></li>
                <li class="uk-active"><span>7</span></li>
                <li><a href="#">8</a></li>
                <li><a href="#">10</a></li>
                <li class="uk-disabled"><span>...</span></li>
                <li><a href="#"><span uk-pagination-next></span></a></li>
            </ul>

        </div>
    </div>
@endsection
