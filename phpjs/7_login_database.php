<!-- 데이터베이스버전으로 로그인 -->
<!-- 보안관련!! 방어기법 있음 -->
<!-- 예 : sql문을 항상 참이 되게 하지 않게 하기 위한 mysqli_real_escape_string -->

<?php
  include("../../outside-webroot/db_settings.php");
  $conn = mysqli_connect('localhost', $db_user, $db_pass);
  unset($db_user,$db_pass);

  mysqli_select_db($conn, 'opentutorials');
  // echo mysqli_real_escape_string($conn, "11'11"); - 특수문자를 알아서 처리해줌, 해보면 11\'11됨
  // 이렇게 이거를 쓰면 sql문을 항상 참이게 바꾸지 못하게 됨
  $name = mysqli_real_escape_string($conn,$_GET['name']);
  $password = mysqli_real_escape_string($conn,$_GET['password']);

  $sql = "SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
  echo $sql;
  $result = mysqli_query($conn, $sql);
//  var_dump($result);
// 데이터 베이스에 있는 사람이면 $result->num_rows값이 1, 아니면 0
  // var_dump($result->num_rows);
  // exit;

  //http://localhost/phpjs/7_login_database.php?name=egoing&password=1' or '1'='1
  //이렇게 입력하면 항상 참 - 뚫림(비번 틀리지만 로긴됨)
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
    <?php
      if ($result->num_rows == 0) {
          echo "wrong";
      } else {
          echo "Hi";
      }
    ?>
  </body>
</html>
