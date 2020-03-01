<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>모델링을 HTML로</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/css/style.css?after">
</head>

<body id="background">
  <header>
    <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
    <h1><a href="http://localhost/index.php">JavaScript</a></h1>
  </header>
  <!--navigation-->
  <nav>
    <ol>
      <?php
      echo file_get_contents("information/list.txt")
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
  </div>
  <!-- 자바 -->
  <script src="http://localhost/script.js"></script>

  <article>
    <?php
    if (empty($_GET['id'])==false) {
        echo file_get_contents("information/".$_GET['id'].".txt");
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
