@extends('layouts.control')

@section('content')
<div class="container">

    <form method="POST" action="{{ route('insert.html') }}">
    @csrf
        <div class="html_form">
            <label>
                単語の名前
            </label>
                <textarea name="html_name" id="" cols="60" rows="1"></textarea>
        </div>

        <div class="html_form">
            <label>
                htmlのタグの意味
            </label>
                <textarea name="html_meaning" id="" cols="60" rows="5"></textarea>
        </div>

        <div class="html_form">
            <label>
                タグのプログラミングでの使い方
            </label>
                <textarea name="html_HowToUse" id="" cols="60" rows="10"></textarea>
        </div>

        <div class="html_form">
            <label>
                タグのプログラミングでの使用例
            </label>
                <textarea name="html_example" id="" cols="60" rows="10"></textarea>
        </div>

        <div class="html_form">
            <label>
                タグのプログラミングでの使用例の説明文
            </label>
                <textarea name="html_description" id="" cols="60" rows="10"></textarea>
        </div>
        <button type="submit" class="insert_button">確定</button>
    </form>
</div>
@endsection