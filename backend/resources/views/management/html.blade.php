@extends('layouts.control')

@section('content')
<div class="container">

    <form method="POST" action="{{ route('insert.html') }}">
    @csrf
        <div class="html_form">
            <label>
                htmlの単語の意味
            </label>
                <textarea name="html_meaning" id="" cols="60" rows="1"></textarea>
        </div>
        <div class="html_form">
            <label>
                htmlのプログラミングの使い方
            </label>
                <textarea name="html_HowToUse" id="" cols="60" rows="10"></textarea>
        </div>
        <div class="html_form">
            <label>
                htmlのプログラミングでの例
            </label>
                <textarea name="html_example" id="" cols="60" rows="10"></textarea>
        </div>
        <button type="submit">確定</button>
    </form>
</div>
@endsection