@extends('layouts.admin')

@section('styles')

@endsection

@section('title', 'html_langage')

@section('content')


        

<div class="container">
    <div class="row">
        <!-- left side -->
        <div class="word-list small-3 medium-4 large-3 columns">
            @for ($i = 1; $i <= count($words); $i++) <div class="word-select">
                @php
                $word = $words[$i-1];
                @endphp
                <li class="word" id="wordNumber{{ $i }}" onclick="menuButton(this, @json($i))"><span class=number>{{ $i }}</span>{{ $word }}</li>
        </div>
        @endfor
        <script>
            function menuButton(element,num) {

        //   document.getElementById('edit_area').innerHTML = @json($words)[num-1];
                words = [
                    { title:"html",
                    description:"ホームページの基礎",
                    },
                    { title:"head",
                    description:"ホームページの情報",
                    },
                ];
                document.getElementById('edit_area').innerHTML = words[0]["title"];
                var wordmean = document.getElementById("txt-hide");
                wordmean.innerHTML = words[0]["description"];
                var prgmean = document.getElementById("prg-hide");
                prgmean.innerHTML = '分割テキスト（左・中央・右揃え)'; 
        }
        </script>
    </div>
    <!-- center -->
    <div class="main-word-area offset-1 col-8">
        <div class="main-word">
            <p id="edit_area">html</p>
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
<h2>php_jsontostring</h2>

</div>



@endsection