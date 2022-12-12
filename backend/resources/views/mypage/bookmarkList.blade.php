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
            @for ($i = 1; $i <= count($bookmarks); $i++)
            <div class="word-select">
                @php
                    $bookmark_id = $bookmarks[$i - 1]->html_word_id;
                        if ($html_db[$i - 1]->id = $bookmark_id) {
                            $html_name = $html_db[$bookmark_id - 1]->html_name;
                            $html_meaning = $html_db[$bookmark_id - 1]->html_meaning;
                            $html_HowToUse = $html_db[$bookmark_id - 1]->html_HowToUse;
                        }
                @endphp
                

                @if(mb_strlen($html_name) < 19)
                <li class="word" onclick="menuButton(this, @json($bookmark_id))"><span class=number>{{ $i }}</span>{{ $html_name }}</li>
                
                @else
                <li class="word-small" onclick="menuButton(this, @json($bookmark_id))"><span class=number>{{ $i }}</span>{{ $html_name }}</li>
                @endif
            </div>
            @endfor
        </div>

        <!-- center -->
        <div class="main-word-area col-lg-8 col-sm-12 offset-sm-1">

            <div class="main-word">
                <p class=title-name id="edit_area">{{ $html_name }}</p>
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
                <p>{{ $html_meaning}}</p>
            </div>
    
            <div class="word-mean">
                <p id="prg-more" class="prg-more"></p>
            </div>
    
    
            <div id="prg-hide">
                <p>{{ $html_HowToUse }}</p>
            </div>
                
        </div> 
    </div>

    <script>

        function menuButton(element, bookmark_num) {
            window.words = {};
            window.words.name = @json($html_db)[bookmark_num - 1].html_name;
            window.words.id = @json($html_db)[bookmark_num - 1].id;

            document.getElementById('edit_area').innerHTML = @json($html_db)[bookmark_num - 1].html_name;
            document.getElementById('txt-hide').innerHTML = @json($html_db)[bookmark_num - 1].html_meaning;
            document.getElementById('prg-hide').innerHTML = @json($html_db)[bookmark_num - 1].html_HowToUse;
        }
    </script>

</div>

@endsection


