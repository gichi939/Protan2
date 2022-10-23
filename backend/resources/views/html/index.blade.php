@extends('layouts.admin')

@section('styles')

@endsection

@section('title', 'html_langage')

@section('content')


<div class="container">
    
    <div class="row">

        <!-- left side -->
        <div class="word-list small-3 medium-4 large-3 columns">
            @for ($i = 1; $i <= count($words); $i++) 
                @php
                $word = $words[$i-1][0];
                @endphp
            <div class="word-select">
                @if(mb_strlen($word) < 19)
                <li class="word" id="wordNumber{{ $i }}" onclick="menuButton(this, @json($i))"><span class=number>{{ $i }}</span>{{ $word }}</li>
                @else
                <li class="word-small" id="wordNumber{{ $i }}" onclick="menuButton(this, @json($i))"><span class=number>{{ $i }}</span>{{ $word }}</li>
                @endif

            </div>


            @endfor
        </div>

        <!-- center -->
        <div class="main-word-area offset-1 col-8">
            <div class="main-word">
                <p class=title-name id="edit_area">html</p>
            </div>
        
            <div class="col-12">
            
                <div class="word-mean">
                    <p id="more" class="more"></p>
                </div>
                <div id="txt-hide">
                    <p>ハイパーテキストマークアップ言語<br></p>
                </div>
        
                <div class="word-mean">
                    <p id="prg-more" class="prg-more"></p>
                </div>
        
        
                <div id="prg-hide">
                    <p>HTMLの<html>要素は HTML 文書においてルート (基点) となる要素 (トップレベル要素) であり、ルート要素とも呼ばれます。他のすべての要素は、この要素の子孫として配置しなければなりません。</p>
                </div>
        
            </div>
        </div> 
    </div>
        
    <script>
        function menuButton(element, num) {
            window.words = {};
            window.words.name = @json($words)[num - 1][0];

            document.getElementById('edit_area').innerHTML = @json($words)[num - 1][0];
            document.getElementById('txt-hide').innerHTML = @json($words)[num - 1][1];
            document.getElementById('prg-hide').innerHTML = @json($words)[num - 1][2];
        }
    </script>

</div>



@endsection