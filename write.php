<?php
  //DB관련
  // mysqli : php의 sql api

  //서버 접속
  //github에 내 비번 남기기 싫어서 비번저장하는php따로 만듦
  include("../outside-webroot/db_settings.php");
  $conn = mysqli_connect('localhost', $db_user, $db_pass);
  unset($db_user,$db_pass);

  //DB선택
  mysqli_select_db($conn, 'opentutorials');

  //조회
  $result = mysqli_query($conn, 'SELECT * FROM topic');

  //출력
  // while ($row = mysqli_fetch_assoc($result)) {
  //     echo $row['id'].$row['title'];
  //     echo "<br />";
  // }
 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>모델링을 HTML로</title>
  <!-- css바로 적용시키려고 링크 뒤에 ?after 넣음 -->
  <link rel="stylesheet" type="text/css" href="http://localhost/css/style.css?after">
</head>

<body id="background">
  <header>
    <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
    <h1><a href="http://localhost">JavaScript</a></h1>
  </header>
  <!--navigation-->
  <nav>
    <ol>
      <?php
      // echo file_get_contents("information/list.txt")
      $contents = array();
      while ($row = mysqli_fetch_assoc($result)) {
          echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
          array_push($contents, $row['description']);
      }
      ?>
    </ol>
  </nav>


  <div id='bg_color'>
    <!-- <input type="button" value="white" onclick="document.getElementById('background').className='white'" />
    <input type="button" value="black" onclick="document.getElementById('background').className='black'" />-->

    <!-- <input type="button" value="white" onclick="background.className='white'" />
    <input type="button" value="black" onclick="background.className='black'" />  -->

    <!-- 왠만하면 자바는 자바대로 html은 html로 남기자 -->
    <input type="button" value="white" id="white_btn" />
    <input type="button" value="black" id="black_btn" />
    <a href="http://localhost/write.php">쓰기</a>
  </div>
  <!-- 자바 -->
  <script src="http://localhost/script.js"></script>

  <article>
    <form class="" action="process.php" method="post">
      <p>
        제목 : <input type="text" name="title" value="">
      </p>
      <p>
        작성자 : <input type="text" name="author" value="">
      </p>
      <p>
        본문 : <textarea name="description" rows="8" cols="80"></textarea>
      </p>
      <input type="submit" name="" value="제출">
    </form>
  </article>

  <?php
  //메세지
  echo file_get_contents("information/message.txt");
   ?>
</body>
<html>
