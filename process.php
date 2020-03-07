<?php
  // echo $_POST['title'];
  //서버 접속
  include("../outside-webroot/db_settings.php");
  require("lib/db.php");
  $conn = db_init($config["host"] ,$config["db_user"],$config["db_pass"],$config["db_name"]);
  unset($config);

  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);

  $sql = "SELECT * FROM user WHERE name='".$author."'";
  $result = mysqli_query($conn, $sql);
  // var_dump($result);
  // exit;
  if ($result->num_rows == 0) {
      $sql = "INSERT INTO user (name,password) VALUES('".author."','111111')";
      mysqli_query($conn, $sql); //sql문을 mysql 서버로 전송
      $user_id = mysqli_insert_id($conn); //여기 id는 primary key
  } else {
      $row = mysqli_fetch_assoc($result);
      $user_id = $row['id'];
  }

  $sql = "INSERT INTO topic(title,description,author,created) VALUES('".$title."','".$description."','".$user_id."',now())";
  $result = mysqli_query($conn, $sql);

  //redirection - 다시 index페이지로 가게!
  header('Location:/index.php');
