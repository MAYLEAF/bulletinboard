<?php
require("../configure/bulletinboard.php");
require("../library/bulletinboard.php");
session_start();
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$sql = "SELECT * FROM user WHERE email='".$_POST['inputEmail']."'"." AND password='".$_POST['inputPassword']."'";
$result = mysqli_query($conn, $sql);


if($result->num_rows == 0){
    $message = "Check id or password. That is an id not registered or missed id or missed password";
    echo "<script type='text/javascript'>alert('$message');</script>";


} else {
  $_SESSION['is_login'] = true;
  $row = mysqli_fetch_assoc($result);
  $_SESSION['nickname'] = $row['name'];
  $_SESSION['email'] = $row['email'];
  header('Location: http://localhost/bulletinboard/index.php');

}
echo '로그인 하지 못했습니다.';
?>
