<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><a href="index.php">Dynimic Web</a></h1>

<!-- func_dirscan_like_egoing -->
<?php
function dirscan_like_egoing($dir){
    $list = scandir($dir);

    $i = 0;
    $list = scandir('./data');

    $i =0;
    while($i<count($list))
    {
       
        if($list[$i] != '.'){
            if($list[$i] != '..'){
                echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
        } 
        $i++;
    }    
}
?>

<!-- func_dirscan_like_othree_use_for-->
<?php
function dirscan_like_othree_use_for($dir){

    $data_list = scandir($dir);
    $data_index = 0;
    for(;$data_index<count($data_list);$data_index++){
        if(!in_array($data_list[$data_index],array('.','..'))){
            echo "<li><a href=\"index.php?id=$data_list[$data_index]\">$data_list[$data_index]</a></li>\n";
        }
    }
}
?>

<!-- dirscan_like_othree_use_foreach -->
<?php
function dirscan_like_othree_use_foreach($dir){
    $data_list = scandir($dir);
    foreach($data_list as $key => $value)
    {
        if(!in_array($value,array('.','..')))
        {
            echo "<li><a href=\"index.php?id=$value\">$value</a></li>\n";
        }
    }
}
?>




<ol>
    <!--    기능 명세 
        date directory에 있는 파일의 목록을 가져오세요 PHP
        파일의 목록으로 하나 하나를 li와 a 태그를 이용해서 글목록을 만드세요  -->
        
    <!-- 
        expr 은 값이 오는 것 최종적으로 값이 되는 것 1+1
        statement 는 어떤 구조를 가진다 -->
    <li>
    <h2>함수 테스트_1</h2>
        <ol>
            <?=dirscan_like_othree_use_for('./data') ?>
        </ol>
    </li>
    <li>
    <h2>함수 테스트_2</h2>
        <ol>
            <?=dirscan_like_othree_use_foreach('./data') ?>
        </ol>
    </li>
    <li>
    <h2>생활 코딩 식 디렉토리 </h2>
        <ol>
            <?php
            
            //1. 생활코딩 식 
            $list = scandir('./data');

            $i =0;
            while($i<count($list))
            {
               
                if($list[$i] != '.'){
                    if($list[$i] != '..'){
                        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                    }
                }
                // //in_array 응용
                // // if(!in_array($list[$i],array('.','..')))
                // // {
                //     echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                // }   
                $i++;
            }

            ?>
        </ol>
    </li>
    <hr>
    <li>
    <h2>for + if 사용 식</h2>
        <ol>
            <?php
            //2. for + if 사용 식 

                $data_list = scandir('./data');
                for($data_count=0;$data_count<count($data_list);$data_count++){
                    if($data_list[$data_count] != array('.','..')){
                        echo "ok".$data_list[$data_count]."<br>";
                    } 
                }
            ?>
        </ol>
    </li>
    <hr>
    <li>
    <h2>foreach 사용 식 (공식 문서)</h2>
        <ol>
            <?php
            //3. foreach 사용 식  
            //key = 인덱스 , value 파일명
            $indexxx = 0;
            foreach($data_list as $key => $value)
            {
                if(!in_array($value,array(".","..")))
                {
                    $indexxx++
                    ?>
                    <li><a href="/index.php?id=<?=$value?>"><?=$indexxx."번째 파일 ".$value."<br>"?></a></li>
                    <?php
                }
            }
            ?>
        </ol>
    </li>
    <hr>
</ol>

<!-- 스크립트 부제목 -->
<h2>
<?php
    if(isset($_GET['id'])){//id가 있으면
        echo $_GET['id'];//id가 있으면 id print
    }else{
        echo "welcome";//default text
    }
?>
</h2>
<!-- 아이디에 맞춰 스크립트 파일 콘텐츠 로드 및 출력 -->
<?php
if(isset($_GET['id'])){//id가 있으면
    echo file_get_contents("./data/".$_GET['id']); // data경로 안에  id와 같은 이름 파일 로드(확장자 필요하면 concat 해야함)
}
?>


</body>
</html>