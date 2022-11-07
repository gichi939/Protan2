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

// リスト押下時バナーを閉じる
$(".word").on("click", function () {
  $(".more").removeClass("on-click");
  $("#txt-hide").slideUp(1);
  $(".prg-more").removeClass("on-click");
  $("#prg-hide").slideUp(1);
});
$(".word-small").on("click", function () {
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
});
$(".word-select").on("click", function () {
  if (words.name.length > 12) {
    $('#edit_area').addClass('title-name-small');
  } else {
    $('#edit_area').removeClass('title-name-small');
  }

  $('.bookmark-icon').addClass('click');
});
$(function () {
  var like = $('.bookmark-icon'); //like-toggleのついたiタグを取得し代入。

  var likeWordId; //変数を宣言（なんでここで？）

  like.on('click', function () {
    //onはイベントハンドラー
    if ($(like).hasClass('click')) {
      likeWordId = words.id;
    } else {
      likeWordId = 1;
    } //ajax処理スタート


    $.ajax({
      headers: {
        //HTTPヘッダ情報をヘッダ名と値のマップで記述
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
      url: '/bookmark/like',
      //通信先アドレスで、このURLをあとでルートで設定します
      method: 'POST',
      //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
      data: {
        //サーバーに送信するデータ
        'word_id': likeWordId //いいねされた投稿のidを送る

      }
    }) //通信成功した時の処理
    .done(function () {
      $this.toggleClass('liked');
    }) //通信失敗した時の処理
    .fail(function () {
      console.log('fail');
    });
  });
});

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