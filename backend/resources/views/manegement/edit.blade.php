@extends('layouts.control')

@section('content')
<div class="container">

    <form method="POST" action="{{ route('update.htmlList') }}">
    @csrf
        <div>
            <p>更新ページ</p>
        </div>
        <div class="html_form">
            <label>
                単語の名前
            </label>
                <textarea name="html_name" value="{{ $HtmlWord->html_name }}" cols="60" rows="1">{{ $HtmlWord->html_name }}</textarea>
        </div>

        <div class="html_form">
            <label>
                htmlのタグの意味
            </label>
                <textarea name="html_meaning" value="{{ $HtmlWord->html_meaning }}" cols="60" rows="1">{{ $HtmlWord->html_meaning }}</textarea>
        </div>

        <div class="html_form">
            <label>
                タグのプログラミングでの使い方
            </label>
                <textarea name="html_HowToUse" value="{{ $HtmlWord->html_HowToUse }}" cols="60" rows="10">{{ $HtmlWord->html_HowToUse }}</textarea>
        </div>

        <div class="html_form">
            <label>
                タグのプログラミングでの使用例
            </label>
                <textarea name="html_example" value="{{ $HtmlWord->html_example }}" cols="60" rows="10">{{ $HtmlWord->html_example }}</textarea>
        </div>
        <input type="hidden" name="id" value="{{ $HtmlWord->id }}">
        <button type="submit">確定</button>
    </form>
</div>
@endsection