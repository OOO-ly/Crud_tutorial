<!-- func def -->
<?php
    //print_title
    function print_title()
    {
        if (isset($_GET['id'])) { //id가 있으면
            echo $_GET['id']; //id가 있으면 id print
        } else {
            echo "Welcome"; //default text
        }
    }
    /*  dirscan 함수 기능 명세 
            date directory에 있는 파일의 목록을 가져오세요 PHP
            파일의 목록으로 하나 하나를 li와 a 태그를 이용해서 글목록을 만드세요  
            
            expr 은 값이 오는 것 최종적으로 값이 되는 것 1+1
            statement 는 어떤 구조를 가진다 
            */
    //dirscan_like_egoing(경로명)
    function dirscan_like_egoing($dir)
    {
        $list = scandir($dir);

        $i = 0;
        $list = scandir('./data');

        $i = 0;
        while ($i < count($list)) {

            if ($list[$i] != '.') {
                if ($list[$i] != '..') {
                    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }
            }
            $i++;
        }
    }
    //dirscan_like_othree_use_for(경로명)
    function dirscan_like_othree_use_for($dir)
    {

        $data_list = scandir($dir);
        $data_index = 0;
        for (; $data_index < count($data_list); $data_index++) {
            if (!in_array($data_list[$data_index], array('.', '..'))) {
                echo "<li><a href=\"index.php?id=$data_list[$data_index]\">$data_list[$data_index]</a></li>\n";
            }
        }
    }
    //dirscan_like_othree_use_foreach(경로명)
    function dirscan_like_othree_use_foreach($dir)
    {
        $data_list = scandir($dir);
        foreach ($data_list as $key => $value) {
            if (!in_array($value, array('.', '..'))) {
                echo "<li><a href=\"index.php?id=$value\">$value</a></li>\n";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php print_title() ?> </title>
</head>

<body>
    <!-- 제목 -->
    <h1><a href="index.php">Dynimic Web</a></h1>
    
    <!-- scandir  -->
    <ol> <?= dirscan_like_othree_use_for('./data') ?>
    </ol>

    <a href="create.php">create</a>
    <form action="create_process.php" method="POST">
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="description" placeholder="Description" cols="30" rows="10"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>

</body>

</html>