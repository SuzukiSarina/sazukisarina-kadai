<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>式と演算子課題(2)</title>
</head>
<body>
    <?php
        echo "(1)","<br/>";
        echo 2+4-5 ,"<br/>";
        echo 4-5+2 ,"<br/>";
        echo 4*5/2 ,"<br/>";
        echo 5/2*4 ,"<br/>";

        echo "(2)","<br/>";
        echo 2*3+4+1 ,"<br/>";
        echo 2*(3+4+1),"<br/>";

        echo "(3)","<br/>";
        echo "①","<br/>";
        echo "username = Admin"; echo "<br/>";
        echo "②","<br/>";
        echo "usernameをAdmin以外にする。"; echo "<br/>";

        echo "(4)", "<br/>";
        $fruit = array("バナナ","メロン","イチゴ","キウイ","グレープフルーツ");
        print_r($fruit);
        echo "<br/>";

        echo "(5)","<br/>";
        sort($fruit);
        print_r($fruit); echo "<br/>";

        echo "(6)", "<br/>";
        $user = array(
            array("鈴木","20"),
            array("佐藤","21"),
            array("木下","22")
        );
        foreach($user as $array){
            foreach($array as $key => $value){
                echo $value;
            }
        }
        echo "<br/>";

        $count = 0;
        while($count < count($user)){
            
            $row = $user[$count];
            $count2 = 0;
            while($count2 < count($row)){
                echo $user[$count][$count2];
                $count2++;
            }
            $count++;
        }
    ?>

</body>
</html>