@extends('layouts.admin')

@section('styles')

@endsection

@section('title', 'html_langage')

@section('content')
<div class="container">
    <div class="row">
        <!-- left side -->
        <div class="word-list small-3 medium-4 large-3 columns">
            @for ($i = 0; $i < count($words); $i++) <div class="word-select">
                <li class="word" id="wordNumber{{ $i }}" data-name="$words{{ $i }}">{{ $words[$i] }}</li>
        </div>
        @endfor
    </div>
    <!-- center -->
    <div class="main-word-area offset-1 col-8">
        <div class="main-word">
            <p id="edit_area">div</p>
        </div>

        <div class="word-mean">
            <p id="more" class="more"></p>
        </div>

        <div id="txt-hide">
            <p>分割する<br>divはdivided（分割する）という単語が由来となっています。</p>
        </div>

        <div class="word-mean">
            <p id="prg-more" class="prg-more"></p>
        </div>

        <div id="prg-hide">
            <p>分割テキスト（左・中央・右揃え</p>
        </div>
    </div>
</div>
</div>



@endsection