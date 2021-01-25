<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1><a href="index.php">Dynimic Web</a></h1>
  <ol>
    <?php 
        $lang_list = scandir('data');      
        $i = 0;
        while($i<count($lang_list)){
            if($lang_list[$i] != '.'){
                if($lang_list[$i] != '..'){
                    ?>
                    <li><a href="index.php?id=<?=$lang_list[$i]?>"><?=$lang_list[$i]?></a></li>
                    <?php
                }
           }$i++;
        }
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