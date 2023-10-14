@extends('applicant.layout')

@section('content')

    <div class="container">
        <div id="create">
            <router-view :key="$route.fullPath"></router-view>
        </div>
        <script src="/js/app.js"></script>
    </div>

@endsection