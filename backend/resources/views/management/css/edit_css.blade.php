@extends('layouts.control')

@section('content')
<div class="container">

    <form method="POST" action="{{ route('update.cssList') }}">
    @csrf
        <div>
            <p>更新ページ</p>
        </div>
        <div class="css_form">
            <label>
                単語の名前
            </label>
                <textarea name="css_name" value="{{ $CssWord->css_name }}" cols="60" rows="1">{{ $CssWord->css_name }}</textarea>
        </div>

        <div class="css_form">
            <label>
                cssのタグの意味
            </label>
                <textarea name="css_meaning" value="{{ $CssWord->css_meaning }}" cols="60" rows="5">{{ $CssWord->css_meaning }}</textarea>
        </div>

        <div class="css_form">
            <label>
                タグのプログラミングでの使い方
            </label>
                <textarea name="css_HowToUse" value="{{ $CssWord->css_HowToUse }}" cols="60" rows="10">{{ $CssWord->css_HowToUse }}</textarea>
        </div>

        <input type="hidden" name="id" value="{{ $CssWord->id }}">
        <button type="submit">確定</button>
    </form>
</div>
@endsection