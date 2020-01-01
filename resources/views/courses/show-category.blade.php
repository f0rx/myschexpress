@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="page-content__inner">
            @include('layouts.partials.breadcrumbs')

            <h1>Courses</h1>

            <h4> {{ $category->name }} <a href="{{ route('courses.categorize', $category) }}" class="text-success">Courses</a> </h4>

            <nav class="responsive-tab">
                <ul>
                    <tabs></tabs>
                </ul>
            </nav>

            <div class="section-small">
                <browse-courses :cat-courses="{{ $category->courses()->paginate(12)->toJson() }}" m-class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid"/>
            </div>

            <!-- pagination menu -->
            <bottom-paginator :category="{{ $category->toJson() }}" :offset="3"></bottom-paginator>
        </div>
    </div>
@endsection
