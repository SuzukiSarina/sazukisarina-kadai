<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>式と演算子課題(1)</title>
</head>
<body>
    <?php
        echo "(1)","<br/>";
        if (strcasecmp ("1st","1st") == 0){
            echo "同じ文字列です\n";
        } else{
            echo "異なる文字列です\n";
        }
        echo "<br/>";

        echo "(2)","<br/>";
        echo "1st"."2st"."3st"; echo "<br/>";
        
        echo "(3)","<br/>";
        $string ="hello";
        $number =12345;
        $x = $string . $number;
        echo $x; echo "<br/>";

        echo "(4)","<br/>";
        define("NAME", "suzuki");
        echo NAME;  echo "<br/>";
        const NAME2 = "satou";
        echo NAME2; echo "<br/>";

        echo "(5)","<br/>";
        echo (__LINE__ . "行目"); echo "<br/>";
        echo (__FILE__); echo "<br/>";

        echo "(6)","<br/>";
        $a =300;
        $x =$a / 365;
        echo $x; echo "<br/>";

        echo "(7)","<br/>";
        $a = 17;
        $a++ ;
        echo $a; echo "<br/>";

        echo "(8)","<br/>";
        $a = 17;
        $a-- ;
        echo $a; echo "<br/>";

        echo "(9)","<br/>";
        $a =10; $b =10;
        $x =++$a + $b++ ;
        echo $x , "<br/>";

        echo "(10)","<br/>";
        $a = 3; $b = 2;
        $x = $a+$b;
        echo $x , "<br/>";

        echo "(11)","<br/>";
        $x =(string) 1234;
        var_dump($x); echo "<br/>";

        echo "(12)","<br/>";
        $locations =3;
        $c =2+ $locations ;
        print($c);

    ?>
</body>
</html>