@extends('layouts.admin')

@section('styles')
@if (config('app.env') === 'production')
<link rel="stylesheet" href="{{ secure_asset('css/html.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css/html.css') }}">
@endif
@endsection

@section('title', 'html_langage')

@section('content')


<div class="container">
    <div class="row">

        <!-- left side -->
        <div class="word-list">
            @for ($i = 1; $i <= count($words); $i++)
                @php
                    if (isset($words[$i-1]->words)) {
                        $words_arr = [];
                        $words_arr[] = explode(",", $words[$i-1]->words);
                        $words_arr[] = explode(";", $words[$i-1]->words_mean);
                        // dd($words_arr);
                    } else {
                        $words_arr = "";
                    }


                    // if ($words_arr == "") {
                    //     echo(1);
                    // } else {
                    //     dd($words_arr);
                    // }
                    $htmlword = $words[$i-1]->html_name;
                @endphp
                <div class="word-select">
                    @if(mb_strlen($htmlword) < 19 && $words_arr == "")

                        <li class="word" id="wordNumber{{ $i }}" onclick="menuButton(this, @json($i))"><span class=number>{{ $i }}</span>{{ $htmlword }}</li>
                        @php
                            // echo('1');
                        @endphp

                        @elseif(mb_strlen($htmlword) < 19 && $words_arr !== "")

                        <li class="word" id="wordNumber{{ $i }}" onclick='menuButton(this, @json($i), @json($words_arr))'><span class=number>{{ $i }}</span>{{ $htmlword }}</li>
                        @php
                            // echo('2');
                        @endphp
                        
                        @elseif(mb_strlen($htmlword) >= 19 && $words_arr == "")
                        <li class="word-small" id="wordNumber{{ $i }}" onclick="menuButton(this, @json($i))"><span class=number>{{ $i }}</span>{{ $htmlword }}</li>
                        @php
                        // echo('3');
                        @endphp

                        @elseif(mb_strlen($htmlword) >= 19 && $words_arr !== "")
                        <li class="word-small" id="wordNumber{{ $i }}" onclick='menuButton(this, @json($i), @json($words_arr))'><span class=number>{{ $i }}</span>{{ $htmlword }}</li>
                        @php
                        // echo('4');
                        @endphp
                    @endif
                    
                </div>
                
                @endfor

        </div>
        <!-- center -->
        <div class="main-word-area col-lg-8 col-sm-12 offset-sm-1">

                <div class="main-word" onclick="changeword()">
                    {{-- <i class="fa-solid fa-circle-chevron-left left-ele" onclick="switchWordleft()"></i> --}}

                    <p class=title-name id="edit_area">{{ $words[0]->html_name}}</p>

                    {{-- <i class="fa-solid fa-circle-chevron-right right-ele" onclick="switchWordright()"></i> --}}

                    @auth
                    @if ($first_word->isLikedBy(Auth::user()))
                    <span>
                        <i class="fa-regular fa-bookmark bookmark-icon liked"></i>
                    </span>
                @else
                <span>
                    <i class="fa-regular fa-bookmark bookmark-icon"></i>
                </span>
                @endif
                @else
                <span>
                    <i class="fa-regular fa-bookmark bookmark-icon register-popup-button"></i>
                </span>
                </div>
                


                <div class="register-popup">
                    <div class="popup-backgrond"></div>
                    <div class="popup-body">
                        <div class="register-sentence">
                            <div>
                                新規登録することで単語を保存できて、学習しやすくなります。
                            </div>
                            <button class="logout-button">
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
{{-- 
            <div class="word-mean">
                <p id="more" class="more"></p>
            </div>
            <div id="txt-hide">HTMLはHypertext Markup Languageの略で日本語訳だと「複数の文書をつなげる方法を記述するための言語」となります。</div>
            
            <div id="second-split-hide"></div>
    
            <div class="prg-howto">
                <p id="prg-howto-more" class="prg-howto-more"></p>
            </div>
    
            <div id="howto-hide">
                <p>{{ $words[0]->html_HowToUse }}</p>
            </div> --}}

        </div>
    </div>


    <script>

        function menuButton(element, num, words_arr) {
            window.words = {};

            window.words.id = @json($words)[num].id;
            wordId = num; //switchWordで使用するため

            if (document.getElementById('edit_area').classList.contains('clicked')) {
                document.getElementById('edit_area').classList.remove('clicked');
            };

            document.getElementById('edit_area').innerHTML = @json($words)[num - 1].html_name;
        }

        function changeword() {
            let edit_area = document.getElementById('edit_area');
            if (!edit_area.classList.contains('clicked')) {
                edit_area.classList.add('clicked');
                edit_area.innerHTML = @json($words)[wordId - 1].html_meaning;
            } else {
                edit_area.classList.remove('clicked');
                edit_area.innerHTML = @json($words)[wordId - 1].html_name;
            };
            
        }

        resetRightNum = 0
        resetLeftNum = 0
        leftResultNum = 0
        rightResultNum = 0
        wordId = 1

        function switchWordleft () {
            if (wordId <= 1) {
                document.getElementById('edit_area').innerHTML = @json($words)[0].html_name;
            } else {
                wordId = wordId - 1
                document.getElementById('edit_area').innerHTML = @json($words)[wordId - 1].html_name;
            }
        }
        
        function switchWordright () {
            if (wordId >= 35) {
                document.getElementById('edit_area').innerHTML = @json($words)[34].html_name;
            } else {
                wordId = wordId + 1
                document.getElementById('edit_area').innerHTML = @json($words)[wordId - 1].html_name;
            }
        }

    </script>

</div>

@endsection