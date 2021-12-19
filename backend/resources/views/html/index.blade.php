@extends('layouts.admin')

@section('styles')

@endsection

@section('title', 'html_langage')

@section('content')


<div class="container">
    <!-- center -->
    <div class="row">

        <div class="main-word-area col-12">
            <div class="main-word">
                <p id="edit_area">html</p>
            </div>
        </div> 
    </div>
    <div class="row">
        <!-- left side -->
        <div class="word-list small-3 medium-4 large-3 columns">
            @for ($i = 1; $i <= count($words); $i++) 
            <div class="word-select">
                @php
                $word = $words[$i-1];
                @endphp
                <li class="word" id="wordNumber{{ $i }}" onclick="menuButton(this, @json($i))"><span class=number>{{ $i }}</span>{{ $words[$i-1][0] }}</li>
            </div>

            @endfor
        </div>



    
        <script>
            function menuButton(element, num) {

                document.getElementById('edit_area').innerHTML = @json($words)[num - 1][0];
                document.getElementById('txt-hide').innerHTML = @json($words)[num - 1][1];
                document.getElementById('prg-hide').innerHTML = @json($words)[num - 1][2];

            }
        </script>
    
        <div class="offset-1 col-8">  
            
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

            <div class="word-mean">
                <p id="prg-example" class="prg-example"></p>
            </div>

            <div id="example-hide">
                <pre>
                    <code>
                        &lthtml&gt
                            &lthead&gt
                                &lttitle&gt文書のタイトル&lt/title&gt
                            &lt/head&gt
                            &ltbody&gt
                                &ltp&gt文書の本体&lt/p&gt
                            &lt/body&gt
                        &lt/html&gt
                    </code>
                </pre>
            </div>
        </div>
    </div>

</div>



@endsection