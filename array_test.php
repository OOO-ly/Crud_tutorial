<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $coworkers = array('AB','CD','EF','GH');
    echo $coworkers[1]."<br>";
    var_dump(count($coworkers));
    echo "<br>";
    var_dump($coworkers);
    echo "<br>";
    array_push($coworkers,12);
    echo "<br>";
    var_dump($coworkers)."<br>";
    echo "<br>";
    array_push($coworkers,12);
    var_dump($coworkers)."<br>";
    echo array_rand($coworkers,12);

    // 배열 함수 확인 필요
    ?>
</body>
</html>