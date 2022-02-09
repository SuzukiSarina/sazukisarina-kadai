<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>関数課題</title>
</head>
<body>
    <?php
        echo "関数課題１","<br/>";
        include "php_kadai5_function.php";
        echo add(1,2). "<br/>";
        echo sub(2,3). "<br/>";
        echo mul(3,4). "<br/>";
        echo div(4,5). "<br/>";
        echo sur(5,6). "<br/>";
    ?>

    <?php
        echo "関数課題２","<br/>";
        $a=1; $b=2;
        echo add2($a,$b)."<br/>";
        $a=2; $b=3;
        echo sub2($a,$b)."<br/>";
        $a=3; $b=4;
        echo mul2($a,$b)."<br/>";
        $a=4; $b=5;
        echo div2($a,$b)."<br/>";
        $a=5; $b=6;
        echo sur2($a,$b)."<br/>";


        


    ?>
</body>
</html>