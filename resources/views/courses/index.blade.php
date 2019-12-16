@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="page-content__inner">
            {{-- <router-view :key="$route.name"></router-view> --}}
            @include('layouts.partials.breadcrumbs')
        </div>
    </div>
@endsection
