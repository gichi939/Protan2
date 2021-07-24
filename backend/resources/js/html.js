function WordClic0() {
    document.getElementById('edit_area').innerHTML = "div";
    var wordmean = document.getElementById("txt-hide");
    wordmean.innerHTML = '分割する<br>divはdivided（分割する）という単語が由来となっています。';
    var prgmean = document.getElementById("prg-hide");
    prgmean.innerHTML = '分割テキスト（左・中央・右揃え)'; // document.getElementById('txt-hide').style.display = "none" ;
    // document.getElementById('prg-hide').style.display = "none" ;
  };
  
  function WordClic1() {
    document.getElementById('edit_area').innerHTML = "h1";
    var pElement = document.getElementById("txt-hide");
    pElement.innerHTML = 'h1';
    var prgmean = document.getElementById("prg-hide");
    prgmean.innerHTML = 'hはheadingの頭文字で文章中の見出しを表します';
  };
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