<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    function basic(){
        print("Othree is Gmae maker : Mollit laboris nulla incididunt pariatur nisi eu.<br>");
        print("Ipsum eiusmod pariatur elit voluptate.<br>");
    }
    function sum($a, $b){
        print($a+$b);
        print("<br>");
    }
    function ssuum($a, $b){
        return $a + $b;
    }
    
    // 파일 생성 함수 ( 파일명(경로) , 콘텐츠 )
    file_put_contents('./result/data_result.txt',file_get_contents("./data/css"));
    file_put_contents('./result/sum_result.txt',file_get_contents("./data/css"));

    sum(60,50);
    echo ssuum(312312312312321,4)."<br>";
    


    basic();
    basic();
    basic();
    ?>
</body>
</html>