<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>制御文課題</title>
</head>
<body>
    <?php
        echo "(1)","<br/>";
        $a = rand(1,10);
        $b = rand(1,10);
        if($a > $b){
            echo "aはbより大きい";
        }elseif($a == $b){
            echo "aはbと等しい";
        }else {
            echo "aはbより小さい";
        }
        echo "<br/>";

        echo "(2)","<br/>";
        $c = rand(1,5);
        $d = rand(1,5);
        $ans = $c > $d ? "aはbより大きい" : "aはbより小さい" ;
        echo $ans; echo "<br/>";

        echo "(3)","<br/>";
        $a = rand(1,4);
        switch($a){
            case 1:
                echo "値は1";
                break;
            case 2:
                echo "値は2";
                break;
            case 3:
                echo "値は3";
                break;
            case 4:
                echo "値は4";
                break;
        }echo "<br/>";

        echo "(4)","<br/>";
        $a = rand(1,4);
        switch($a){
            case 1:
                echo "値は1";
            case 2:
                echo "値は2";
            case 3:
                echo "値は3";
            case 4:
                echo "値は4";
        }echo "<br/>";

        echo "(5)","<br/>";
        $a = rand(1,6);
        switch($a){
            case 1:
                echo "値は1";
                break;
            case 2:
                echo "値は2";
                break;
            case 3:
                echo "値は3";
                break;
            case 4:
                echo "値は4";
                break;
            default :
                echo "エラー";
            }echo "<br/>";

            echo "(6)","<br/>";
            $a = rand(1,4);
        switch($a):
            case 1:
                echo "値は1";
                break;
            case 2:
                echo "値は2";
                break;
            case 3:
                echo "値は3";
                break;
            case 4:
                echo "値は4";
                break;
        endswitch;
        echo "<br/>";

        echo "(7)","<br/>";
        $x = 0;
        while($x < 10){
            echo $x. "<br/>";
            $x++;
        }echo "<br\>";

        echo "(8)","<br/>";
        $y = 0;
        do{
            echo $y."<br/>";
            $y++;
        }while($y < 10);
        echo "<br/>";

        echo "(9)","<br/>";
        for($counter=-3; $counter<10; $counter++){
            if($counter == 0){
                break;
            }
            echo 100/$counter;
        }echo "<br/>";

        echo "(10)","<br/>";
        for($counter=-3; $counter<10; $counter++){
            if($counter == 0){
                continue;
            }
            echo 100/$counter."<br/>";
        }


    ?>
</body>
</html>