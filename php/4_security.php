<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Javascript를 사용자가 마음대로 변경할 수 있을 때에,
    보안관련 문제가 생긴다.

    내가 만든 페이지와 유사한 페이지를 만들어서
    거기에 사용자가 입력한 정보를 빼돌린다거나
    그런 문제가 생긴다고 한다.
   -->
    <!-- html entity검색시 나옴 , 너무 불편함 -->
    <!-- &lt;a&gt;  -->

    <!-- php에는 내장함수로 자동으로 바꿔주는 함수가 있음 -->
    <?php
     echo htmlspecialchars("<a href='http://opentutorials.org/course/1'>생활코딩</a>");
     echo htmlentities("<script>alert(1);</script>");
     ?>
  </body>
</html>
