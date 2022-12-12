@extends('layouts.admin')

@section('styles')
@endsection

@section('title', 'html_langage')

@section('content')

<div class="container">
    <div class="low">
        <form method="GET" action="{{ route('search.index') }}" style="padding-top: 100px">
            <input type="search" placeholder="単語名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
            <div>
                <button type="submit">検索</button>
                <button>
                    <a href="{{ route('search.index') }}" class="text-white">
                        クリア
                    </a>
                </button>
            </div>
        </form>
        
        @foreach($words as $word)
                {{ $word->html_name }}<br>
        @endforeach
        
    
    </div>
</div>
@endsection