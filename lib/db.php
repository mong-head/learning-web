<?php
function db_init($host,$db_u,$db_pw,$db_name){
  // mysqli : php의 sql api

  //서버 접속
  $conn = mysqli_connect($host, $db_u, $db_pw);

  //DB선택
  mysqli_select_db($conn, $db_name);
  return $conn;
}

?>
