<?php
require("../configure/bulletinboard.php");
require("../library/bulletinboard.php");
session_start();

if(!isset($_SESSION['is_login'])){
    header('Location: ./login.php');
}

$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$sql = "SELECT * FROM user WHERE email='".$_POST['inputEmail']."'";

$result = mysqli_query($conn, $sql);

$begood = mysqli_real_escape_string($conn ,$_POST['inputBegood']);
$wannagood = mysqli_real_escape_string($conn ,$_POST['inputWannagood']);
$day = $_POST['inputDay0'].$_POST['inputDay1'].$_POST['inputDay2'].$_POST['inputDay3'].$_POST['inputDay4'].$_POST['inputDay5'].$_POST['inputDay6'];
$day = mysqli_real_escape_string($conn, $day);
$time = mysqli_real_escape_string($conn ,$_POST['inputTime']);
$homepage = mysqli_real_escape_string($conn ,$_POST['inputHomepage']);
$region = mysqli_real_escape_string($conn ,$_POST['inputRegion']);
$memo = mysqli_real_escape_string($conn ,$_POST['inputMemo']);


if($result->num_rows == 0){

  $sql = "INSERT INTO card (user,begood,wannagood,day,`time`,homepage,region,memo,created) VALUES('".$_SESSION[email]."','".$begood."','".$wannagood."','".$day."','".$time."','".$homepage."','".$region."','".$memo."', now())";
  $result= mysqli_query($conn, $sql);
  header('Location: http://localhost/bulletinboard/index.php');
} else {


      $message = "already registered email, find your ID";
      echo "<script type='text/javascript'>alert('$message');</script>";

      sleep(4);

  header('Location: http://localhost/bulletinboard/signup.php');
}

?>
