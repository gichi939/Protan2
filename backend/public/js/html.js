/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/html.js":
/*!******************************!*\
  !*** ./resources/js/html.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// function menuButton(element,word) {
//   document.getElementById('edit_area').innerHTML = word;
// }
function WordClic0() {
  document.getElementById('edit_area').innerHTML = "jsonstring[0]";
  var wordmean = document.getElementById("txt-hide");
  wordmean.innerHTML = '分割する<br>divはdivided（分割する）という単語が由来となっています。';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = '分割テキスト（左・中央・右揃え)';
}

;

function WordClic1() {
  document.getElementById('edit_area').innerHTML = "head";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'head';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic2() {
  document.getElementById('edit_area').innerHTML = "link";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'link';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic3() {
  document.getElementById('edit_area').innerHTML = "meta";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'meta';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic4() {
  document.getElementById('edit_area').innerHTML = "style";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'style';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic5() {
  document.getElementById('edit_area').innerHTML = "body";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'body';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic6() {
  document.getElementById('edit_area').innerHTML = "footer";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'footer';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic7() {
  document.getElementById('edit_area').innerHTML = "header";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'header';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic8() {
  document.getElementById('edit_area').innerHTML = "h1";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'h1';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic9() {
  document.getElementById('edit_area').innerHTML = "main";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'main';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic10() {
  document.getElementById('edit_area').innerHTML = "nav";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'nav';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic11() {
  document.getElementById('edit_area').innerHTML = "section";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'section';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic12() {
  document.getElementById('edit_area').innerHTML = "blockquote";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'blockquote';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic13() {
  document.getElementById('edit_area').innerHTML = "dd";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'dd';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic14() {
  document.getElementById('edit_area').innerHTML = "div";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'div';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic15() {
  document.getElementById('edit_area').innerHTML = "dl";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'dl';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic16() {
  document.getElementById('edit_area').innerHTML = "dt";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'dt';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic17() {
  document.getElementById('edit_area').innerHTML = "hr";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'hr';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic18() {
  document.getElementById('edit_area').innerHTML = "li";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'li';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic19() {
  document.getElementById('edit_area').innerHTML = "ol";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'ol';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic20() {
  document.getElementById('edit_area').innerHTML = "p";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'p';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic21() {
  document.getElementById('edit_area').innerHTML = "pre";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'pre';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic22() {
  document.getElementById('edit_area').innerHTML = "ul";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'ul';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic23() {
  document.getElementById('edit_area').innerHTML = "a";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'a';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic24() {
  document.getElementById('edit_area').innerHTML = "abbr";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'abbr';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic25() {
  document.getElementById('edit_area').innerHTML = "br";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'br';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic26() {
  document.getElementById('edit_area').innerHTML = "city";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'city';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic27() {
  document.getElementById('edit_area').innerHTML = "code";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'code';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic28() {
  document.getElementById('edit_area').innerHTML = "data";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'data';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic29() {
  document.getElementById('edit_area').innerHTML = "i";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'i';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic30() {
  document.getElementById('edit_area').innerHTML = "mark";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'mark';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic31() {
  document.getElementById('edit_area').innerHTML = "q";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'q';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic32() {
  document.getElementById('edit_area').innerHTML = "span";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'span';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic33() {
  document.getElementById('edit_area').innerHTML = "strong";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'strong';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic34() {
  document.getElementById('edit_area').innerHTML = "time";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'time';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic35() {
  document.getElementById('edit_area').innerHTML = "audio";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'audio';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic36() {
  document.getElementById('edit_area').innerHTML = "img";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'img';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic37() {
  document.getElementById('edit_area').innerHTML = "video";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'video';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic38() {
  document.getElementById('edit_area').innerHTML = "svg";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'svg';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic39() {
  document.getElementById('edit_area').innerHTML = "canvas";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'canvas';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic40() {
  document.getElementById('edit_area').innerHTML = "script";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'script';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic41() {
  document.getElementById('edit_area').innerHTML = "table";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'table';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic42() {
  document.getElementById('edit_area').innerHTML = "td";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'td';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic43() {
  document.getElementById('edit_area').innerHTML = "th";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'th';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic44() {
  document.getElementById('edit_area').innerHTML = "thead";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'thead';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic45() {
  document.getElementById('edit_area').innerHTML = "tr";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'tr';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic46() {
  document.getElementById('edit_area').innerHTML = "button";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'button';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic47() {
  document.getElementById('edit_area').innerHTML = "form";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'form';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic48() {
  document.getElementById('edit_area').innerHTML = "input";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'input';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic49() {
  document.getElementById('edit_area').innerHTML = "label";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'label';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic50() {
  document.getElementById('edit_area').innerHTML = "option";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'option';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic51() {
  document.getElementById('edit_area').innerHTML = "select";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'select';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic52() {
  document.getElementById('edit_area').innerHTML = "textarea";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'textarea';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;

function WordClic53() {
  document.getElementById('edit_area').innerHTML = "details";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'details';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;
$(".word").on("click", function () {
  $(".more").removeClass("on-click");
  $("#txt-hide").slideUp(1);
  $(".prg-more").removeClass("on-click");
  $("#prg-hide").slideUp(1);
}); // 意味を見るを押した処理

$(".more").on("click", function () {
  $(".more").toggleClass("on-click");
  $("#txt-hide").slideToggle(1);
}); // プログラミングでの使い方を押した時

$(".prg-more").on("click", function () {
  $(".prg-more").toggleClass("on-click");
  $("#prg-hide").slideToggle(1);
}); // var button0 = document.getElementById('wordNumber1');
// button0.onclick = WordClic0;
// var button1 = document.getElementById('wordNumber2');
// button1.onclick = WordClic1;
// var button2 = document.getElementById('wordNumber3');
// button2.onclick = WordClic2;
// var button3 = document.getElementById('wordNumber4');
// button3.onclick = WordClic3;
// var button4 = document.getElementById('wordNumber5');
// button4.onclick = WordClic4;
// var button5 = document.getElementById('wordNumber6');
// button5.onclick = WordClic5;
// var button6 = document.getElementById('wordNumber7');
// button6.onclick = WordClic6;
// var button7 = document.getElementById('wordNumber8');
// button7.onclick = WordClic7;
// var button8 = document.getElementById('wordNumber9');
// button8.onclick = WordClic8;
// var button9 = document.getElementById('wordNumber10');
// button9.onclick = WordClic9;
// var button10 = document.getElementById('wordNumber11');
// button10.onclick = WordClic10;
// var button11 = document.getElementById('wordNumber12');
// button11.onclick = WordClic11;
// var button12 = document.getElementById('wordNumber13');
// button12.onclick = WordClic12;
// var button13 = document.getElementById('wordNumber14');
// button13.onclick = WordClic13;
// var button14 = document.getElementById('wordNumber15');
// button14.onclick = WordClic14;
// var button15 = document.getElementById('wordNumber16');
// button15.onclick = WordClic15;
// var button16 = document.getElementById('wordNumber17');
// button16.onclick = WordClic16;
// var button17 = document.getElementById('wordNumber18');
// button17.onclick = WordClic17;
// var button18 = document.getElementById('wordNumber19');
// button18.onclick = WordClic18;
// var button19 = document.getElementById('wordNumber20');
// button19.onclick = WordClic19;
// var button20 = document.getElementById('wordNumber21');
// button20.onclick = WordClic20;
// var button21 = document.getElementById('wordNumber22');
// button21.onclick = WordClic21;
// var button22 = document.getElementById('wordNumber23');
// button22.onclick = WordClic22;
// var button23 = document.getElementById('wordNumber24');
// button23.onclick = WordClic23;
// var button24 = document.getElementById('wordNumber25');
// button24.onclick = WordClic24;
// var button25 = document.getElementById('wordNumber26');
// button25.onclick = WordClic25;
// var button26 = document.getElementById('wordNumber27');
// button26.onclick = WordClic26;
// var button27 = document.getElementById('wordNumber28');
// button27.onclick = WordClic27;
// var button28 = document.getElementById('wordNumber29');
// button28.onclick = WordClic28;
// var button29 = document.getElementById('wordNumber30');
// button29.onclick = WordClic29;
// var button30 = document.getElementById('wordNumber31');
// button30.onclick = WordClic30;
// var button31 = document.getElementById('wordNumber32');
// button31.onclick = WordClic31;
// var button32 = document.getElementById('wordNumber33');
// button32.onclick = WordClic32;
// var button33 = document.getElementById('wordNumber34');
// button33.onclick = WordClic33;
// var button34 = document.getElementById('wordNumber35');
// button34.onclick = WordClic34;
// var button35 = document.getElementById('wordNumber36');
// button35.onclick = WordClic35;
// var button36 = document.getElementById('wordNumber37');
// button36.onclick = WordClic36;
// var button37 = document.getElementById('wordNumber38');
// button37.onclick = WordClic37;
// var button38 = document.getElementById('wordNumber39');
// button38.onclick = WordClic38;
// var button39 = document.getElementById('wordNumber40');
// button39.onclick = WordClic39;
// var button40 = document.getElementById('wordNumber41');
// button40.onclick = WordClic40;
// var button41 = document.getElementById('wordNumber42');
// button41.onclick = WordClic41;
// var button42 = document.getElementById('wordNumber43');
// button42.onclick = WordClic42;
// var button43 = document.getElementById('wordNumber44');
// button43.onclick = WordClic43;
// var button44 = document.getElementById('wordNumber45');
// button44.onclick = WordClic44;
// var button45 = document.getElementById('wordNumber46');
// button45.onclick = WordClic45;
// var button46 = document.getElementById('wordNumber47');
// button46.onclick = WordClic46;
// var button47 = document.getElementById('wordNumber48');
// button47.onclick = WordClic47;
// var button48 = document.getElementById('wordNumber49');
// button48.onclick = WordClic48;
// var button49 = document.getElementById('wordNumber50');
// button49.onclick = WordClic49;
// var button50 = document.getElementById('wordNumber51');
// button50.onclick = WordClic50;
// var button51 = document.getElementById('wordNumber52');
// button51.onclick = WordClic51;
// var button52 = document.getElementById('wordNumber53');
// button52.onclick = WordClic52;

/***/ }),

/***/ 2:
/*!************************************!*\
  !*** multi ./resources/js/html.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/gichi939/Protan2/backend/resources/js/html.js */"./resources/js/html.js");


/***/ })

/******/ });