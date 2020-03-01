<?php
  // echo $_POST['title'];
  //서버 접속
  //github에 내 비번 남기기 싫어서 비번저장하는php따로 만듦
  include("../outside-webroot/db_settings.php");
  $conn = mysqli_connect('localhost', $db_user, $db_pass);
  unset($db_user,$db_pass);

  //DB선택
  mysqli_select_db($conn, 'opentutorials');

  $sql = "INSERT INTO topic(title,description,author,created) VALUES('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())";

  $result = mysqli_query($conn, $sql);

  //redirection - 다시 index페이지로 가게!
  header('Location:http://localhost/index.php');
 ?>
