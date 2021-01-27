<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP_TUTORIAL</h1>
    <!-- 조건문 -->
   
    <h2><a href="./php_lang.php?id=<?=$value?>">
    값 변경
    </a>
    </h2>


    <?php
   
    if($value != 1){
        echo " true";
        $value * -1;
    }
    else{
        echo "false";
        $value * -1;
    }

    ?>
    

    <!-- 반복문 -->
    <?php 
    while($)


    ?>
    <hr>
    <h2>while 반복문</h2>
    <?php
        $i = 0;
        while($i<10)
        {
            echo $i."<br>";
            $i +=3;
        }
    ?>
    <hr>
    <h2>for 반복문</h2>
    <?php
    for($j = 0; $j <= 10; $j+=2)
    {
        echo $j."<br>"; 
    }
    ?>

    <!-- 배열 -->
    <h2>배열</h2>
    <?php
    
    $coworkers = array('lee','kim','park','choi');

    $list_ = array();
    $i = 0;
    while($i < 10){
        $list_[$i] = $i; 
        $i++;
    } 
    $j = 0;
    while($j<count($coworkers)){
    echo $coworkers[$j]."<br>";
    $j++;
    }

    echo count($coworkers)."<br>";
    echo var_dump($coworkers)."<br>";
    array_push($coworkers, "go");
    echo var_dump($coworkers)."<br>";
    $temp = array_pop($coworkers);
    echo $temp;
    echo var_dump($coworkers)."<br>";
    echo $coworkers[array_search('kim',$coworkers)];
    ?>

</body>
</html>