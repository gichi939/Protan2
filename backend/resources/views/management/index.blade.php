@extends('layouts.control')

@section('content')
    <div class="add_db">
        <a href="{{ route('add.html') }}"><p>htmlのデータ追加</p></a>
        <a href="{{ route('add.css') }}"><p>cssのデータ追加</p></a>
    </div>
@endsection