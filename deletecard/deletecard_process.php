<?php
require("../configure/bulletinboard.php");
require("../library/bulletinboard.php");
session_start();

if(!isset($_SESSION['is_login'])){
    header('Location: ../login/login.php');
}
$cardid = htmlspecialchars($_GET['deletecard']);

$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);


$result = mysqli_query($conn, $sql);
$cardid = mysqli_real_escape_string($conn, $_POST['deletecard']);
$sql = "SELECT user FROM card WHERE cardid='".$cardid."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($row['user'] == $_SESSION['email']){

  $sql = "DELETE FROM card WHERE cardid = '".$cardid."'" ;
  $result= mysqli_query($conn, $sql);
  header('Location: http://localhost/bulletinboard/index.php');
} else {
      sleep(4);
  header('Location: http://localhost/bulletinboard/signup/signup.php');
}

?>
