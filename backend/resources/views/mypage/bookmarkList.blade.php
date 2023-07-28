@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/html.css') }}">
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('title', 'html_langage')

@section('content')

<div class="container">

    
    <div class="row">
        
        <!-- left side -->
        <div class="left_side">
            <div class="save-word-select">
                <p>保存した単語</p>
                <select id="save-word">
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                </select>
            </div>
            <div class="word-list">
                @for ($i = 1; $i <= count($bookmarks); $i++)
                <div class="word-select">
                    @php
                        $bookmark_id = $bookmarks[$i - 1]->html_word_id;
                        // $bookmark_css_id = $css_bookmarks[$i - 1]->css_word_id;
                        if ($html_db[$i - 1]->id = $bookmark_id) {
                            $html_name = $html_db[$bookmark_id - 2]->html_name;
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
                <p class=title-name id="edit_area">{{ $html_db[0]->html_name }}</p>
            </div>
            
            @if ($first_word->isLikedBy(Auth::user()))
            <i class="fa-regular fa-bookmark bookmark-icon liked"></i>
            @else
            <i class="fa-regular fa-bookmark bookmark-icon"></i>
            @endif

            <div class="word-mean">
                <p id="more" class="more"></p>
            </div>
            <div id="txt-hide">
                <p><span class="noun">名</span>頭部 <span class="verb">動</span>先導する</p>
            </div>
    
            <div class="prg-howto">
                <p id="prg-howto-more" class="prg-howto-more"></p>
            </div>
    
            <div id="howto-hide">
                <p>{{ $words[0]->html_HowToUse }}</p>
            </div>

            <div class="prg-exam">
                <p id="prg-exam-more" class="prg-exam-more"></p>
            </div>

            <div id="exam-hide">
                    <p id="exam-hideblock">{{ $words[0]->html_example }}</p>
                    <p id="description-hideblock">{{ $words[0]->html_description }}</p>
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
    </div>

    <script>

        function menuButton(element, num) {
            window.words = {};
            window.words.name = @json($words)[num - 1].html_name;
            window.words.id = @json($words)[num - 1].id;

            document.getElementById('edit_area').innerHTML = @json($words)[num - 1].html_name;
            document.getElementById('txt-hide').innerHTML = @json($words)[num - 1].html_meaning;
            document.getElementById('howto-hide').textContent = @json($words)[num - 1].html_HowToUse;
            document.getElementById('exam-hideblock').textContent = @json($words)[num - 1].html_example;
            document.getElementById('description-hideblock').textContent = @json($words)[num - 1].html_description;
        }
    </script>

</div>

@endsection


