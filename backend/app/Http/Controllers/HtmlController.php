<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function show() 
    {
        $words = array();
        $words = [
                ["html",'HTMLは「HyperText Markup Language」（ハイパーテキスト マークアップ ランゲージ）の略称で<br>プログラミング言語ではなくマークアップ言語です','HTML の <html> 要素は HTML 文書においてルート (基点) となる要素 (トップレベル要素) であり、他のすべての要素は、この要素の子孫として配置しなければなりません。ルート要素とも呼ばれます。他のすべての要素は、この要素の子孫として配置しなければなりません。'],
                ["head",'動：頭'],
                ["link",'繋げる接続<br>link upで一緒に作業をするという意味もあります'],
                ["meta",'メタ<br>メタとは、ある事象に対する異なる次元からの観点という意味'],
                ["style",'様式,〇〇風,〇〇流'],
                ["title",'表題、題名'],
                ["body",'身体'],
                ["footer",'身長が…フィートの人'],
                ["header",'まっさかさまに落ちること'],
                ["h1~h6",'表題、見出し'],
                ["main",],
                ["nav",],
                ["section",],
                ["blockquote",],
                ["dd",],
                ["div",],
                ["dl",],
                ["dt",],
                ["hr",],
                ["li",],
                ["ol",],
                ["p",],
                ["pre",],
                ["ul",],
                ["a",],
                ["abbr",],
                ["br",],
                ["cite",],
                ["code",],
                ["data",],
                ["i",],
                ["mark",],
                ["q",],
                ["span",],
                ["strong",],
                ["time",],
                ["audio",],
                ["img",],
                ["video",],
                ["svg",],
                ["canvas",],
                ["script",],
                ["table",],
                ["td",],
                ["th",],
                ["thead",],
                ["tr",],
                ["button",],
                ["form",],
                ["input",],
                ["label",],
                ["option",],
                ["select",],
                ["textarea",],
                ["details"],
        ];
        
        return view('html/index')->with('words',$words);
    }
}
