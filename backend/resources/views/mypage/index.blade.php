@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('title', 'html_langage')

@section('content')

<div class="container">
    <div class="low">
        <div class="title-logo">
            <p>Mypage</p>
        </div>
        <div class="user-info">
            <div class="name-label">
                <p>ニックネーム</p>
                <p>{{ $users->name }}</p>
            </div>
            <div class="mail-label">
                <p>メールアドレス</p>
                <p>{{ $users->email }}</p>
            </div>
        </div>
        <div class="bookmark">
            <button>保存した単語へ</button>
        </div>
    </div>
</div>
@endsection