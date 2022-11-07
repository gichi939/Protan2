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
  });


  // 意味を見るを押した処理
  $(".more").on("click", function () {
    $(".more").toggleClass("on-click");
    $("#txt-hide").slideToggle(1);
  });
  // プログラミングでの使い方を押した時
  $(".prg-more").on("click", function () {
    $(".prg-more").toggleClass("on-click");
    $("#prg-hide").slideToggle(1);
  });

  $(".word-select").on("click", function () {
    if ((words.name.length) > 12) {
      $('#edit_area').addClass('title-name-small');
    } else {
      $('#edit_area').removeClass('title-name-small');
    }
      $('.bookmark-icon').addClass('click');

    });
    $(function () {
      let like = $('.bookmark-icon'); //like-toggleのついたiタグを取得し代入。
      let likeWordId; //変数を宣言（なんでここで？）
      like.on('click', function () { //onはイベントハンドラー
        if ($(like).hasClass('click')) {
          likeWordId = words.id;
        } else {
          likeWordId = 1;
        }
        //ajax処理スタート
        $.ajax({
          headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
          url: '/bookmark/like', //通信先アドレスで、このURLをあとでルートで設定します
          method: 'POST', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
          data: { //サーバーに送信するデータ
            'word_id': likeWordId //いいねされた投稿のidを送る
          },
        })
        //通信成功した時の処理
        .done(function () {
          $this.toggleClass('liked');
        })
        //通信失敗した時の処理
        .fail(function () {
          console.log('fail'); 
        });
      });
      });


