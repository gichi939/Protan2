@extends('layouts.admin')

@section('styles')
@if (config('app.env') === 'production')
<link rel="stylesheet" href="{{ secure_asset('css/html.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css/html.css') }}">
@endif
@endsection

@section('title', 'css_langage')

@section('content')


<div class="container">
    
    <div class="row">

        <!-- left side -->
        <div class="word-list">
            @for ($i = 1; $i <= count($words); $i++)
                @php
                $cssword = $words[$i-1]->css_name;
                @endphp
            <div class="css-word-select">
                @if(mb_strlen($cssword) < 19)
                <li class="word" id="wordNumber{{ $i }}" onclick="menuButton(this, @json($i))"><span class=number>{{ $i }}</span>{{ $cssword }}</li>

                @else
                <li class="word-small" id="wordNumber{{ $i }}" onclick="menuButton(this, @json($i))"><span class=number>{{ $i }}</span>{{ $cssword }}</li>
                @endif
            </div>
            @endfor

        </div>
        <!-- center -->
        <div class="main-word-area col-lg-8 col-sm-12 offset-sm-1">

            <div class="main-word">
                <p class=title-name id="edit_area">{{ $words[0]->css_name}}</p>
            </div>

            @auth
                @if ($first_word->isLikedBy(Auth::user()))
                    <i class="fa-regular fa-bookmark css-bookmark-icon liked"></i>
                @else
                    <i class="fa-regular fa-bookmark css-bookmark-icon"></i>
                @endif
            @else
                <div>
                    <i class="fa-regular fa-bookmark css-bookmark-icon register-popup-button"></i>
                </div>
                <div class="register-popup">
                    <div class="popup-backgrond"></div>
                    <div class="popup-body">
                        <div class="register-sentence">
                            <div>
                                新規登録することで単語を保存できて、学習しやすくなります。
                            </div>
                            <button class="close-button">
                                <i class="fa-solid fa-xmark close"></i>
                            </button>
                        </div>
                        <div class="auth-link">
                            <a class="register-popup-link" href="/register">
                                新規登録
                            </a>
                            <a class="login-popup-link" href="/login">
                                ログイン
                            </a>
                        </div>
                    </div>
                </div>
            @endauth
            
            <div class="word-mean">
                <p id="more" class="more"></p>
            </div>

            <div id="txt-hide"><span class="noun">名</span>幅</div>

            <div class="prg-howto">
                <p id="prg-howto-more" class="prg-howto-more"></p>
            </div>
    
            <div id="howto-hide">
                <p>{{ $words[0]->css_HowToUse }}</p>
            </div>
        
        </div> 
    </div>

    <script>

        function menuButton(element, num) {
            window.words = {};
            window.words.name = @json($words)[num - 1].css_name;
            window.words.id = @json($words)[num - 1].id;

            document.getElementById('edit_area').innerHTML = @json($words)[num - 1].css_name;
            document.getElementById('txt-hide').innerHTML = @json($words)[num - 1].css_meaning;
            document.getElementById('howto-hide').innerHTML = @json($words)[num - 1].css_HowToUse;
        }
    </script>

</div>



@endsection