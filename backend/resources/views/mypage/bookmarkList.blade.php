@extends('layouts.admin')

@section('styles')

@if (config('app.env') === 'production')
<link rel="stylesheet" href="{{ secure_asset('css/html.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/mypage.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css/html.css') }}">
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endif
@endsection

@section('title', 'html_langage')

@section('content')

<div class="container">

    
    <div class="row">
        
        <!-- left side -->
        <div class="left_side">

        @if($bookmarks->isempty())
            <p>データがありません</p>
        @else
            {{-- <div class="save-word-select"> htmlとcssの切り替えする用のボタン
                <p>保存した単語</p>
                <select id="save-word">
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                </select>
            </div> --}}
            <div class="word-list">
                @for ($i = 1; $i <= count($bookmarks); $i++)
                <div class="word-select">
                    @php
                        $bookmark_id = $bookmarks[$i-1]->html_word_id;
                        if ($html_db[$i - 1]->id = $bookmark_id) {
                            $html_name = $html_db[$bookmark_id - 1]->html_name;
                            $html_meaning = $html_db[$bookmark_id - 1]->html_meaning;
                            $html_HowToUse = $html_db[$bookmark_id - 1]->html_HowToUse;

                            // $css_name = $css_db[$bookmark_css_id - 1]->css_name;
                            // $css_meaning = $css_db[$bookmark_css_id - 1]->css_meaning;
                            // $css_HowToUse = $css_db[$bookmark_css_id - 1]->css_HowToUse;
                        }
                    @endphp
                    
                    @if(mb_strlen($html_name) < 19)
                    <li class="word" onclick="menuButton(this, @json($bookmark_id))"><span class=number>{{ $i }}</span>{{ $html_name }}</li>
                    
                    @else
                    <li class="word-small" onclick="menuButton(this, @json($bookmark_id))"><span class=number>{{ $i }}</span>{{ $html_name }}</li>
                    @endif
                    {{-- <li class="word" onclick="menuButton(this, @json($bookmark_id))"><span class=number>{{ $i }}</span>{{ $css_name }}</li> --}}
                    
                </div>
                @endfor
            </div>
        </div>

        <!-- center -->
        <div class="main-word-area col-lg-8 col-sm-12 offset-sm-1">

            <div class="main-word">
                <p class=title-name id="edit_area">{{ $html_db[$bookmark_id-1]->html_name }}</p>
            </div>
            
            @if ($html_db[$bookmark_id-1]->isMypageLikedBy(Auth::user(), $html_db[$bookmark_id-1]->id))
            <i class="fa-regular fa-bookmark bookmark-icon liked"></i>
            @else
            <i class="fa-regular fa-bookmark bookmark-icon"></i>
            @endif

            <div class="word-mean">
                <p id="more" class="more"></p>
            </div>
            <div id="txt-hide">{{ $html_db[$bookmark_id-1]->html_meaning }}</div>
    
            <div class="prg-howto">
                <p id="prg-howto-more" class="prg-howto-more"></p>
            </div>
    
            <div id="howto-hide">
                <p>{{ $html_db[$bookmark_id-1]->html_HowToUse }}</p>
            </div>
                
            {{-- css --}}
            {{-- <div class="main-word">
                <p class=title-name id="edit_area">{{ $css_db[0]->css_name }}</p>
            </div>
            
            @if ($first_css_word->isLikedBy(Auth::user()))
            <i class="fa-regular fa-bookmark bookmark-icon liked"></i>
            @else
            <i class="fa-regular fa-bookmark bookmark-icon"></i>
            @endif

            <div class="word-mean">
                <p id="more" class="more"></p>
            </div>
            <div id="txt-hide">
                <p>{{ $css_db[0]->css_meaning}}</p>
            </div>
    
            <div class="prg-exm">
                <p id="prg-more" class="prg-more"></p>
            </div>
    
    
            <div id="prg-hide">
                <p>{{ $css_db[0]->css_HowToUse }}</p>
            </div> --}}
        </div> 
        @endif
    </div>

    <script>

        function menuButton(element, num) {
            window.words = {};
            window.words.name = @json($html_db)[num - 1].html_name;
            window.words.id = @json($html_db)[num - 1].id;

            document.getElementById('edit_area').innerHTML = @json($html_db)[num-1].html_name;
            document.getElementById('txt-hide').innerHTML = @json($html_db)[num-1].html_meaning;
            document.getElementById('howto-hide').textContent = @json($html_db)[num-1].html_HowToUse;
        }
    </script>

</div>

@endsection


