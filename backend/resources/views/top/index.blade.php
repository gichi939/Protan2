@extends('layouts.admin')

@section('title', 'TopPage')

@section('content')
<div class="container">

    <div class="language-course">
        <div class="row">
            <div class="course-item col-5">
                <a class="cource-link" href="{{ route('html.show') }}">
                    <div class="link-obj">
                        <h1 class="course-title">HTML編</h1>
                        <img class="course-image" src=" {{ asset('image/HTML5_Logo.png') }}" alt="">
                    </div>
                </a>
            </div>
            <div class="offset-1"></div>
            <div class="course-item col-5">
                <a class="cource-link" href="">
                    <div class="link-obj">
                        <h1 class="course-title">CSS編</h1>
                        <img class="course-image" src=" {{ asset('image/css3_logo.png') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection