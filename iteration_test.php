<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>for</h1>
    <?php
    echo '1<br>';
    echo '2<br>';
    echo '3<br>';
    echo '4<br>';
    ?>
    <hr>
    <?php
    for($i = 1;$i<5;$i++){
        $str = $i."<br>";
        echo nl2br($str);
    }
    ?>
    <hr>
    <h1>while</h1>
    <?php
    $j=0;
    while($j < 3){
        echo $j."<br>";
        $j++;
    }
    ?>
    
</body>
</html>