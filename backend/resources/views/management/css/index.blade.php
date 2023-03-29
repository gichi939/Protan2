@extends('layouts.control')

@section('content')
<div class="container">

    <form method="POST" action="{{ route('insert.css') }}">
    @csrf
        <div class="css_form">
            <label>
                単語の名前
            </label>
                <textarea name="css_name" id="" cols="60" rows="1"></textarea>
        </div>

        <div class="css_form">
            <label>
                cssのタグの意味
            </label>
                <textarea name="css_meaning" id="" cols="60" rows="1"></textarea>
        </div>

        <div class="css_form">
            <label>
                タグのプログラミングでの使い方
            </label>
                <textarea name="css_HowToUse" id="" cols="60" rows="10"></textarea>
        </div>

        <div class="css_form">
            <label>
                タグのプログラミングでの使用例
            </label>
                <textarea name="css_example" id="" cols="60" rows="10"></textarea>
        </div>
        <button type="submit">確定</button>
    </form>
</div>
@endsection