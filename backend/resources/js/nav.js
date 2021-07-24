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
  };