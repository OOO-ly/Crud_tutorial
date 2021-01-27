<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>hello world</h1>
  <h1><a href="index.php">Dynimic Web</a></h1>
  <ol>
    <?php
    //date directory에 있는 파일의 목록을 가져오세요 PHP
    //파일의 목록으로 하나 하나를 li와 a 태그를 이용해서 글목록을 만드세요 
    //expr 은 값이 오는 것 최종적으로 값이 되는 것 1+1
    //statement 는 어떤 구조를 가진다
    
    
    ?>
  </ol>
<h2>
<?php
    if(isset($_GET['id'])){
        echo $_GET['id'];
    }else{
        echo "welcome";
    }
?>
</h2>

<?php
if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
}
?>


</body>
</html>