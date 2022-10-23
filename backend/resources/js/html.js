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
      // if ($("#edit_area").length) {
        $('#edit_area').addClass('title-name-small');
      } else {
        $('#edit_area').removeClass('title-name-small');
      
      }
  });


