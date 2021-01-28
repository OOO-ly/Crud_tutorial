<!-- 

//var_dump($_POST['title']); // string


 -->
<!-- GET 방식은 생성, 갱신 삭제에선 사용하면 안된다. URL을 통해 해당 기능이 의도와 달리 실행 될 수 있기 때문 -->
<!-- POST 방식을 통해 URL을 변경(만들어 반영 하지 않고 value를 보낼 수 있다. URL 반영이 안되기 떄문에 한번만 실행하여 원하는 타이밍에 기능할 수 있다.) -->
<!-- form method attr 가 GET일 경우 php에서 받는것도 GET attr 이 POST일 경우 받는 것도 POST -->
<?php
file_put_contents('data/'.$_POST['title'],$_POST['description']);
echo "<p>title : ".$_POST['title']."</p>";
echo "<p>description : ".$_POST['description']."</p>";
?>