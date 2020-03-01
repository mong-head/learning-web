<?php
// localhost/php/1_input_value.php?id=1 이라고 치면 1이 나옴
//echo $_GET['id'];

//http://localhost/php/1_input_value.php?name=mong&id=1 이라고 치면 mong,1나옴
echo $_GET['name'].",".$_GET['id'];

//주소와 값을 구분시 ?, 값과 값을 구분시에 &
 ?>
