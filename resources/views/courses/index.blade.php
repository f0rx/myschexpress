@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="page-content__inner">
            @include('layouts.partials.breadcrumbs')

            <h1>All Courses</h1>

            <div class="section-small">
                <browse-courses m-class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid"/>
            </div>

            <!-- pagination menu -->
            <bottom-paginator :offset="3"></bottom-paginator>

        </div>
    </div>
@endsection
