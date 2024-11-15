const { ajax } = require("jquery");
const { words } = require("lodash");

// リスト押下時バナーを閉じる
$(".word").on("click", function () {
  $(".more").removeClass("on-click");
  $(".prg-howto-more").removeClass("on-click");
  $("#txt-hide").slideUp(1);
  $("#howto-hide").slideUp(1);
  $("#second-split-hide").slideUp(1);
});

$(".word-small").on("click", function () {
  $(".more").removeClass("on-click");
  $(".prg-howto-more").removeClass("on-click");
  $("#txt-hide").slideUp(1);
  $("#howto-hide").slideUp(1);
  $("#second-split-hide").slideUp(1);
});


// 意味を見るを押した処理
$(".more").on("click", function () {
  $(".more").toggleClass("on-click");
  $("#txt-hide").slideToggle(1);
  $("#first-split-hide").slideUp(1);
  $("#second-split-hide").slideUp(1);
});

// プログラミングでの使い方を押した時
$(".prg-howto-more").on("click", function () {
  $(".prg-howto-more").toggleClass("on-click");
  $("#howto-hide").slideToggle(1);
});

$(".word-select").on("click", function () {
  $('.bookmark-icon').addClass('click');
  $('.word-select').addClass('click');
  if ((words.name.length) > 11) {
    $('#edit_area').addClass('title-name-small');
  } else {
    $('#edit_area').removeClass('title-name-small');
  }
});

$(".css-word-select").on("click", function () {
  $('.css-bookmark-icon').addClass('click');
  if ((words.name.length) > 10) {
    $('#edit_area').addClass('title-name-small');
  } else {
    $('#edit_area').removeClass('title-name-small');
  }
});


$(function () {
  $(".left-ele").hover(
    function () {
      $(".left-ele").css('background', 'gray');
      $(".left-ele").css('border-radius', '30px 0 0 30px');
    },
    function () {
      $(".left-ele").css('background', '#f9fbfe');
    }
  )
});

$(function () {
  $(".right-ele").hover(
    function () {
      $(".right-ele").css('background', 'gray');
      $(".right-ele").css('border-radius', '0 30px 30px 0');
    },
    function () {
      $(".right-ele").css('background', '#f9fbfe');
    }
  )
});


$(function () {
  let like = $('.bookmark-icon');
  let likeWordId;

  like.on('click', function () {
    if ($(like).hasClass('click')) {
      likeWordId = wordId;
    } else {
      likeWordId = 1;
    }
    //ajax処理スタート
    $.ajax({
      headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      },
      url: '/bookmark/like',
      method: 'POST',
      data: {
        'word_id': likeWordId
      },
      dataType: "json",
    })
    //通信成功した時の処理
    .done(function (data) {
      var data_stringify = JSON.stringify(data);
      var data_json = JSON.parse(data_stringify);
      var bookmark_datas = data_json['bookmark_all_datas'];
      var auth_id = data_json['auth_id'];
      for (let i = 0; i < bookmark_datas.length; i++) {
        var user_id = data_json['bookmark_all_datas'][i]['user_id'];
        var html_word_id = data_json['bookmark_all_datas'][i]['html_word_id'];
      }
      if (user_id == auth_id) {
        console.log("1")
        if (!$(like).hasClass('liked')) {
          console.log("2")
          $(like).addClass('liked');
        } else {
            console.log("3")
            $(like).removeClass('liked');
        }
      }
    })
    //通信失敗した時の処理
    .fail(function () {
      console.log('fail'); 
    });
  });
});

  $(function () {
    $(".word-select").on("click", function () {
      // const word_id = $('#test').data();
      // console.log(word_id);
      $.ajax({
        headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
        url: '/bookmark/switch', //通信先アドレスで、このURLをあとでルートで設定します
        method: 'POST', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
      })
      .done(function (data) {
        var data_stringify = JSON.stringify(data);
      var data_json = JSON.parse(data_stringify);
      var bookmark_datas = data_json['bookmark_all_datas'];
      var auth_id = data_json['auth_id'];
      for (let i = 0; i < bookmark_datas.length; i++) {
        var user_id = data_json['bookmark_all_datas'][i]['user_id'];
        var html_word_id = data_json['bookmark_all_datas'][i]['html_word_id'];
        console.log(eng_words.id);
        if (user_id == auth_id) {
          if (html_word_id == eng_words.id) {
            $('.bookmark-icon').addClass('liked');
            console.log("done");
            break;
          } else {
            $('.bookmark-icon').removeClass('liked');
          }
        }
        }
      })
      //通信失敗した時の処理
      .fail(function () {
        console.log('fail');
      });
    });
  });

  $(function () {
    let css_like = $('.css-bookmark-icon');
    let likeWordId;
    
    css_like.on('click', function () {
      if ($(css_like).hasClass('click')) {
        likeWordId = words.id;
      } else {
        likeWordId = 1;
      }
      //ajax処理スタート
      $.ajax({
        headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
        url: '/bookmark/css_like', //通信先アドレスで、このURLをあとでルートで設定します
        method: 'POST', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
        data: { //サーバーに送信するデータ
          'word_id': likeWordId //いいねされた投稿のidを送る
        },
      })
      //通信成功した時の処理
      .done(function (data) {
        var data_stringify = JSON.stringify(data);
        var data_json = JSON.parse(data_stringify);
        var bookmark_datas = data_json['bookmark_all_datas'];
        var auth_id = data_json['auth_id'];
        for (let i = 0; i < bookmark_datas.length; i++) {
          var user_id = data_json['bookmark_all_datas'][i]['user_id'];
          var css_word_id = data_json['bookmark_all_datas'][i]['css_word_id'];
          if (user_id == auth_id) {  //ログインできてるか検証
            if (css_word_id == likeWordId) {
              $(css_like).addClass('liked');
            } else {
              if ($(css_like).hasClass('liked')) {
                $(css_like).removeClass('liked');
              }
            }
          }
        }
      })
      //通信失敗した時の処理
      .fail(function () {
        console.log('fail'); 
      });
    });
  });
  
  $(function () {
    $(".css-word-select").on("click", function () {
      $.ajax({
        headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
        url: '/bookmark/css_switch', //通信先アドレスで、このURLをあとでルートで設定します
        method: 'POST', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
      })
      .done(function (data) {
        var data_stringify = JSON.stringify(data);
      var data_json = JSON.parse(data_stringify);
      var bookmark_datas = data_json['bookmark_all_datas'];
      var auth_id = data_json['auth_id'];
      for (let i = 0; i < bookmark_datas.length; i++) {
        var user_id = data_json['bookmark_all_datas'][i]['user_id'];
        var css_word_id = data_json['bookmark_all_datas'][i]['css_word_id'];
        function compareFunc(a, b) {
          return a - b;
        }
        if (user_id == auth_id) {
          if (css_word_id == words.id) {
            $('.css-bookmark-icon').addClass('liked');
            break;
          } else {
            $('.css-bookmark-icon').removeClass('liked');
          }
        }
      }
      })
      //通信失敗した時の処理
      .fail(function () {
        console.log('fail'); 
      });
    });
  });

  $(function(){
    // 変数に要素を入れる
    var open = $('.search-button'),
      close = $('.modal-close'),
      container = $('.modal-container');
  
    //開くボタンをクリックしたらモーダルを表示する
    open.on('click',function(){	
      container.addClass('active');
      $('body').css('overflow-y', 'hidden'); 
      return false;
    });
  
    //閉じるボタンをクリックしたらモーダルを閉じる
    close.on('click',function(){
      container.removeClass('active');
      $('body').css('overflow-y','auto'); 
    });
  
    //モーダルの外側をクリックしたらモーダルを閉じる
    $(document).on('click',function(e) {
      if(!$(e.target).closest('.modal-body').length) {
        container.removeClass('active');
        $('body').css('overflow-y','auto'); 
      }
    });
  });

  // popupを表示
  $(".register-popup-button").on("click", function () {
    $('.register-popup').addClass('click');
  });

  // popupを非表示
  $(".logout-button").on("click", function () {
    $('.register-popup').removeClass('click');
  });


    // popupを表示
    $(".logout-button").on("click", function () {
      $('.logout-popup').addClass('click');
    });
  
    // popupを非表示
    $(".logout-button").on("click", function () {
      $('.logout-popup').removeClass('click');
    });
  