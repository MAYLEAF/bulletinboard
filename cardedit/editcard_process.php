<?php
  require("../configure/bulletinboard.php");
  require("../library/bulletinboard.php");
  session_start();

  if(!isset($_SESSION['is_login'])){
      header('Location: ../login/login.php');
  }

  $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);


  $begood = mysqli_real_escape_string($conn ,$_POST['inputBegood']);
  $wannagood = mysqli_real_escape_string($conn ,$_POST['inputWannagood']);
  $day = $_POST['inputDay0'].$_POST['inputDay1'].$_POST['inputDay2'].$_POST['inputDay3'].$_POST['inputDay4'].$_POST['inputDay5'].$_POST['inputDay6'];
  $day = mysqli_real_escape_string($conn, $day);
  $time = mysqli_real_escape_string($conn ,$_POST['inputTime']);
  $homepage = mysqli_real_escape_string($conn ,$_POST['inputHomepage']);
  $region = mysqli_real_escape_string($conn ,$_POST['inputRegion']);
  $memo = mysqli_real_escape_string($conn , $_POST['inputMemo']);
  $cardid = mysqli_real_escape_string($conn, $_POST['inputcardid']);



  $sql = "UPDATE card SET begood = '".$begood."',wannagood = '".$wannagood."', day = '".$day."', `time` = '".$time."', homepage = '".$homepage."', region = '".$region."', memo = '".$memo."', created = now() WHERE cardid = '".$cardid."'";
  $result= mysqli_query($conn, $sql);
  header('Location: http://localhost/bulletinboard/index.php');

?>
