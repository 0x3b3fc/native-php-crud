<?php

  function showHeader($Title = ""){
    global $PAGE_TITLE;
    $PAGE_TITLE = $Title;
    include __DIR__."/../views/header.php";
  }
  function showFooter(){
    include __DIR__."/../views/footer.php";
  }

 ?>
