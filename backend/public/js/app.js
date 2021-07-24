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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./html */ "./resources/js/html.js");

__webpack_require__(/*! ./nav */ "./resources/js/nav.js");

/***/ }),

/***/ "./resources/js/html.js":
/*!******************************!*\
  !*** ./resources/js/html.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

function WordClic0() {
  document.getElementById('edit_area').innerHTML = "div";
  var wordmean = document.getElementById("txt-hide");
  wordmean.innerHTML = '分割する<br>divはdivided（分割する）という単語が由来となっています。';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = '分割テキスト（左・中央・右揃え)'; // document.getElementById('txt-hide').style.display = "none" ;
  // document.getElementById('prg-hide').style.display = "none" ;
}

;

function WordClic1() {
  document.getElementById('edit_area').innerHTML = "h1";
  var pElement = document.getElementById("txt-hide");
  pElement.innerHTML = 'h1';
  var prgmean = document.getElementById("prg-hide");
  prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
}

;
$(".more").on("click", function () {
  $(".more").toggleClass("on-click");
  $("#txt-hide").slideToggle(100);
});
$(".prg-more").on("click", function () {
  $(".prg-more").toggleClass("on-click");
  $("#prg-hide").slideToggle(100);
});
var button = document.getElementById('wordNumber0');
button.onclick = WordClic0;
var button2 = document.getElementById('wordNumber1');
button2.onclick = WordClic1;

/***/ }),

/***/ "./resources/js/nav.js":
/*!*****************************!*\
  !*** ./resources/js/nav.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(".openbtn1").click(function () {
  //ボタンがクリックされたら
  openMenu(this);
});
$("#g-nav a").click(function () {
  //ナビゲーションのリンクがクリックされたら
  closeMenu();
}); //   $("body").click(function () {//ナビゲーションのリンクがクリックされたら
//     if ($(".openbtn1").attr("class") == "openbtn1 active") {
//         $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
//         $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスを除去
//         $("#g-ul").removeClass('ul_active');
//         $(".circle-bg").removeClass('circleactive');//丸背景のcircleactiveクラスを除去
//     }
// });

$(".circle-bg").hover(function () {// hover on
}, function () {
  // hover off
  closeMenu();
});

function openMenu(element) {
  $(element).toggleClass('active'); //ボタン自身に activeクラスを付与し

  $("#g-nav").toggleClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与

  $("#g-ul").toggleClass('ul_active');
  $(".circle-bg").toggleClass('circleactive'); //丸背景にcircleactiveクラスを付与
}

function closeMenu() {
  $(".openbtn1").removeClass('active'); //ボタンの activeクラスを除去し

  $("#g-nav").removeClass('panelactive'); //ナビゲーションのpanelactiveクラスを除去

  $("#g-ul").removeClass('ul_active');
  $(".circle-bg").removeClass('circleactive'); //丸背景のcircleactiveクラスを除去
}

;

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/gichi939/Protan2/backend/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Users/gichi939/Protan2/backend/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });