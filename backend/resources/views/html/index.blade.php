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
                @for ($i = 0; $i < count($words); $i++)
                    @php
                        if (isset($words[$i]->words)) {
                            $words_arr = [];
                            $words_arr[] = explode(',', $words[$i]->words);
                            $words_arr[] = explode(';', $words[$i]->words_mean);
                            // dd($words_arr);
                        } else {
                            $words_arr = '';
                        }

                        $htmlword = $words[$i]->html_name;
                    @endphp
                    <div class="word-select">
                        @if (mb_strlen($htmlword) < 19)
                            <li class="word" id="wordNumber{{ $i + 1 }}"
                                onclick="menuButton(this, @json($i))"><span
                                    class=number>{{ $i + 1 }}</span>{{ $htmlword }}</li>
                        @else
                            <li class="word-small" id="wordNumber{{ $i + 1 }}"
                                onclick='menuButton(this, @json($i), @json($words_arr))'><span
                                    class=number>{{ $i + 1 }}</span>{{ $htmlword }}</li>
                        @endif
                    </div>
                @endfor

            </div>
            <!-- center -->
            <div class="main-word-area col-lg-8 col-sm-12 offset-sm-1">

                <div class="main-word" onclick="changeword()">
                    <p class=title-name id="edit_area">{{ $words[0]->html_name }}</p>

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

                    <i class="fa-solid fa-circle-chevron-left left-ele" onclick="switchWordleft()"></i>

                    <i class="fa-solid fa-circle-chevron-right right-ele" onclick="switchWordright()"></i>


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
            let edit_area = document.getElementById('edit_area');

            function menuButton(element, num, words_arr) {
                window.words = {};

                word_name = @json($words)[num].html_name;
                window.words.id = @json($words)[num].id;
                wordId = num; //switchWordで使用するため

                if (edit_area.classList.contains('clicked')) {
                    edit_area.classList.remove('clicked');
                };
                word_chara = word_name.length;
                console.log(word_chara);
                if (word_chara >= 20) {
                    $("#edit_area").css('font-size', '4rem');
                } else if (word_chara >= 13) {
                    $("#edit_area").css('font-size', '5rem');
                } else if (word_chara >= 12) {
                    $("#edit_area").css('font-size', '9rem');
                } else {
                    $("#edit_area").css('font-size', '10rem');
                }
                edit_area.innerHTML = @json($words)[num].html_name;
            };

            function changeword() {
                html_meaning = @json($words)[wordId].html_meaning
                html_name = @json($words)[wordId].html_name
                if (!edit_area.classList.contains('clicked')) {
                    edit_area.classList.add('clicked');
                    edit_area.innerHTML = @json($words)[wordId].html_meaning;

                    html_meaning_chara = html_meaning.length;

                    if (html_meaning_chara >= 40) {
                        $("#edit_area").css('font-size', '3rem');
                    } else if (html_meaning_chara >= 20) {
                        $("#edit_area").css('font-size', '5rem');
                    } else {
                        $("#edit_area").css('font-size', '6rem');
                    }
                } else {
                    edit_area.classList.remove('clicked');
                    edit_area.innerHTML = @json($words)[wordId].html_name;

                    html_chara = html_name.length;

                    if (html_chara >= 20) {
                        $("#edit_area").css('font-size', '4rem');
                    } else if (html_chara >= 12) {
                        $("#edit_area").css('font-size', '5rem');
                    } else if (html_chara >= 10) {
                        $("#edit_area").css('font-size', '9rem');
                    } else {
                        $("#edit_area").css('font-size', '10rem');
                    }
                };


            }

            wordId = 0

            function switchWordleft() {
                html_name = @json($words)[wordId - 1].html_name
                // console.log(html_name.length);
                if ($(edit_area).hasClass('clicked')) {
                    edit_area.classList.remove('clicked');
                }
                if (wordId <= 0) {
                    edit_area.innerHTML = @json($words)[0].html_name;
                } else {
                    wordId = wordId - 1
                    console.log(wordId)
                    edit_area.innerHTML = @json($words)[wordId].html_name;

                    html_chara = html_name.length;

                    if (html_chara >= 20) {
                        $("#edit_area").css('font-size', '4rem');
                    } else if (html_chara >= 12) {
                        $("#edit_area").css('font-size', '5rem');
                    } else if (html_chara >= 10) {
                        $("#edit_area").css('font-size', '9rem');
                    } else {
                        $("#edit_area").css('font-size', '10rem');
                    }
                }
            }

            function switchWordright() {
                html_name = @json($words)[wordId + 1].html_name
                console.log(html_name.length);
                let edit_area = document.getElementById('edit_area');
                if ($(edit_area).hasClass('clicked')) {
                    edit_area.classList.remove('clicked');
                }
                if (wordId >= 34) {
                    document.getElementById('edit_area').innerHTML = @json($words)[34].html_name;
                } else {
                    wordId = wordId + 1
                    document.getElementById('edit_area').innerHTML = @json($words)[wordId].html_name;
                }

                html_chara = html_name.length;

                if (html_chara >= 20) {
                    $("#edit_area").css('font-size', '4rem');
                } else if (html_chara >= 12) {
                    $("#edit_area").css('font-size', '5rem');
                } else if (html_chara >= 10) {
                    $("#edit_area").css('font-size', '9rem');
                } else {
                    $("#edit_area").css('font-size', '10rem');
                }
            }
        </script>

    </div>

@endsection
