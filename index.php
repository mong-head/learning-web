<?php
  //DB관련
  //github에 내 비번 남기기 싫어서 비번저장하는php따로 만듦
  include("../outside-webroot/db_settings.php");
  require("lib/db.php");
  $conn = db_init($config["host"] ,$config["db_user"],$config["db_pass"],$config["db_name"]);
  unset($config);
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
      //$contents = array();
      while ($row = mysqli_fetch_assoc($result)) {
        // 사용자가 직접입력하는 요소는 html등으로 해석하지 않게 htmlspecialchars를 쓴다
          echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
          //array_push($contents, $row['description']);
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
    <?php
    // if (empty($_GET['id'])==false) {
    //     echo file_get_contents("information/".$_GET['id'].".txt");
    // }

    // if (empty($_GET['id'])==false) {
    //   echo file_get_contents($_GET['id'].".txt");
    // }

    //me
    // if (empty($_GET['id'])==false) {
    //   echo $contents[ $_GET['id']-1];
    // }
    if (empty($_GET['id'])===false) {
        $sql="SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET["id"];
        $result=mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        // 사용자 입력 정보는 모두 공격 대상이 될 수 있으므로 이렇게 htmlspecialchars로 감싼다.
        //escaping
        echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
        echo '<p>'.htmlspecialchars($row['name']).'</p>';
        //echo htmlspecialchars($row['description']);
        //위의 description을 저렇게 처리하면 about Javascript에서 문제가 생긴다.
        echo strip_tags($row['description'],"<a><h1><h2><h3><h4><h5><ul><ol><li>");
        //"<a><h1>~~"는 내가 허용하는 태그들
    }

    //댓글
    echo file_get_contents("information/comment.txt");
     ?>
  </article>

  <?php
  //메세지
  echo file_get_contents("information/message.txt");
   ?>
</body>
<html>
