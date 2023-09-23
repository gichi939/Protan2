@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/html.css') }}">
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

            <div class="main-word">
                <p class=title-name id="edit_area">{{ $words[0]->html_name}}</p>
            </div>

            @auth
                @if ($first_word->isLikedBy(Auth::user()))
                    <i class="fa-regular fa-bookmark bookmark-icon liked"></i>
                @else
                    <i class="fa-regular fa-bookmark bookmark-icon"></i>
                @endif
            @else
                <div>
                    <i class="fa-regular fa-bookmark bookmark-icon register-popup-button"></i>
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
            <div id="txt-hide">HTMLはHypertext Markup Languageの略で日本語訳だと「複数の文書をつなげる方法を記述するための言語」となります。</div>
            
            <div id="second-split-hide"></div>
    
            <div class="prg-howto">
                <p id="prg-howto-more" class="prg-howto-more"></p>
            </div>
    
            <div id="howto-hide">
                <p>{{ $words[0]->html_HowToUse }}</p>
            </div>

        </div>
    </div>


    <script>

        function menuButton(element, num, words_arr) {
            window.words = {};
            window.words.name = @json($words)[num - 1].html_name;
            window.words.id = @json($words)[num - 1].id;

            // console.log(@json($words)[num - 1]);
            // console.log(words[1]);

            // if (words === null) {
            //     console.log('1');
            // } else {
            //     console.log('2');
            // }

            document.getElementById('edit_area').innerHTML = @json($words)[num - 1].html_name;
            document.getElementById('txt-hide').innerHTML = @json($words)[num - 1].html_meaning;
            document.getElementById('howto-hide').textContent = @json($words)[num - 1].html_HowToUse;
            document.getElementById('txt-hide').insertAdjacentHTML('beforeend', '<p class="first-split-word">'+words_arr[0][0]+'</p>');
            document.getElementById('txt-hide').insertAdjacentHTML('beforeend', '<p id="first-split-hide">'+words_arr[1][0]+'</p>');
            document.getElementById('txt-hide').insertAdjacentHTML('beforeend', '<p class="second-split-word">'+words_arr[0][1]+'</p>');
            document.getElementById('second-split-hide').innerHTML = words_arr[1][1];

            // 意味を見るを押下時に出てくるボタンを押した時
            $(".first-split-word").on("click", function () {
                $(".first-split-word").toggleClass("on-click");
                $("#first-split-hide").slideToggle(1);
            });

            $(".second-split-word").on("click", function () {
                $(".second-split-word").toggleClass("on-click");
                $("#second-split-hide").slideToggle(1);
            });
        }

    </script>

</div>

@endsection