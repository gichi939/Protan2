@extends('layouts.admin')

@section('styles')

@if (config('app.env') === 'production')
<link rel="stylesheet" href="{{ secure_asset('css/mypage.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endif
@endsection

@section('title', 'html_langage')

@section('content')

<div class="container">
    <div class="low">
        <div class="title-logo">
            <p>Mypage</p>
            <hr>
        </div>
        <div class="user-info">
            <div class="name-form">
                <p class="name-label">ニックネーム</p>
                <p>{{ $users->name }}</p>
            </div>
            <div class="mail-form">
                <p class="mail-label">メールアドレス</p>
                <p>{{ $users->email }}</p>
            </div>
        </div>
        <div class="bookmark">
            <a href="{{ route('bookmark.words') }}"><button>保存した単語へ</button></a>
        </div>
    </div>
</div>
@endsection