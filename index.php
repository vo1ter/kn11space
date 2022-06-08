<?php session_start(); date_default_timezone_set("Europe/Kiev"); ?>
<!DOCTYPE html>
<html lang="en">
<?php readfile("app/html/meta.html"); ?>
<body>
<?php include("app/php/navbar.php"); ?>
<div class="container" style="flex-direction: row;">
  <div class="child-container left" id="rings">
    <?php 
      readfile("app/html/rings.html");
      include("app/php/ism.php");
    ?>
  </div>
  <div class="child-container right" id="lessons">
    <p class="title">Розклад занять</p>
    <?php
    if (date("W") % 2 == 0) {
      $studyType = "низах";
    }
    else {
      $studyType = "верхах";
    }
    echo "<p>Ми вчимося по <b>".$studyType."</b></p>";

    $todayDate = date("l");
    $nextDayDate = date("l", strtotime(date("l")  . "+1 day"));;
    echo '<a class="button" style="margin-top: 10px; margin-bottom: 10px;" href="#'.$todayDate.'">Сьогодні</a><a class="button" style="margin-bottom: 10px;" href="#'.$nextDayDate.'">Завтра</a>';
    
    $days = [
      "monday",
      "tuesday",
      "wednesday",
      "thursday",
      "friday"
    ];
    for($i = 0; $i < 5; $i++){
      $_GET["day"] = $days[$i];
      include("app/php/getLessons.php");
    }
    ?>
  </div>
</div>
<?php include('app/php/footer.php') ?>
</body>
</html>