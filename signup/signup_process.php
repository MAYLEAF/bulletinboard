<?php
require("../configure/bulletinboard.php");
require("../library/bulletinboard.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$sql = "SELECT * FROM user WHERE email='".$_POST['inputEmail']."'";

$result = mysqli_query($conn, $sql);

$email = mysqli_real_escape_string($conn ,$_POST['inputEmail']);
$password = mysqli_real_escape_string($conn ,$_POST['inputPassword']);
$name = mysqli_real_escape_string($conn ,$_POST['inputName']);
$sex = mysqli_real_escape_string($conn ,$_POST['inputSex']);
$age = mysqli_real_escape_string($conn ,$_POST['inputAge']);

if($result->num_rows == 0){

  $sql = "INSERT INTO user (email,password,name,sex,age) VALUES('".$email."','".$password."','".$name."','".$sex."','".$age."')";
  $result= mysqli_query($conn, $sql);
  header('Location: http://localhost/bulletinboard/index.php');
} else {


      $message = "already registered email, find your ID";
      echo "<script type='text/javascript'>alert('$message');</script>";

      sleep(4);

  header('Location: http://localhost/bulletinboard/signup.php');
}

?>
