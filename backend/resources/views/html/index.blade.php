@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/html.css') }}">
@endsection

@section('title', 'html_langage')

@section('content')


<div class="container">
    
    <div class="row">

        <!-- left side -->
        <div class="word-list small-3 medium-4 large-3 columns">
            @for ($i = 1; $i <= count($words); $i++) 
                @php
                $htmlword = $words[$i-1]->html_name;
                @endphp
            <div class="word-select">
                @if(mb_strlen($htmlword) < 19)
                <li class="word" id="wordNumber{{ $i }}" onclick="menuButton(this, @json($i))"><span class=number>{{ $i }}</span>{{ $htmlword }}</li>
                
                @else
                <li class="word-small" id="wordNumber{{ $i }}" onclick="menuButton(this, @json($i))"><span class=number>{{ $i }}</span>{{ $htmlword }}</li>
                @endif
                
            </div>
            
            @auth
            <i class="fa-regular fa-bookmark bookmark-icon"></i>
            
            @else
            <a href="/login">
                <i class="fa-regular fa-bookmark bookmark-icon"></i>
            </a>
            @endauth
            @endfor

        </div>
        <!-- center -->
        <div class="main-word-area offset-1 col-8">

            <div class="main-word">
                <p class=title-name id="edit_area">{{ $words[0]->html_name}}</p>

                    
            </div>
                
        
            <div class="col-12">
            
                <div class="word-mean">
                    <p id="more" class="more"></p>
                </div>
                <div id="txt-hide">
                    <p>{{ $words[0]->html_meaning}}</p>
                </div>
        
                <div class="word-mean">
                    <p id="prg-more" class="prg-more"></p>
                </div>
        
        
                <div id="prg-hide">
                    <p>{{ $words[0]->html_HowToUse }}</p>
                </div>
        
            </div>
        </div> 
    </div>
 

    <script>

        function menuButton(element, num) {
            window.words = {};
            window.words.name = @json($words)[num - 1].html_name;
            window.words.id = @json($words)[num - 1].id;

            document.getElementById('edit_area').innerHTML = @json($words)[num - 1].html_name;
            document.getElementById('txt-hide').innerHTML = @json($words)[num - 1].html_meaning;
            document.getElementById('prg-hide').innerHTML = @json($words)[num - 1].html_HowToUse;
        }
    </script>

</div>



@endsection