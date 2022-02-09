<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>配列課題</title>
</head>
<body>
    <?PHP
        echo "(1)","<br/>";
        $day =array ("月曜日","火曜日","水曜日","木曜日","金曜日");
        foreach($day as $val){
            echo $val;
        }echo "<br/>";

        echo "(2)","<br/>";
        $a =array(
            "犬"=>"猫", "青"=>"赤", "白"=>"黒", "日本酒"=>"ワイン"
        );
        foreach($a as $key=>$val){
            echo $key.$val;
        }echo "<br/>";

        echo "(3)","<br/>";
        echo $day[2];echo "<br/>";
        echo ($a["青"]);echo "<br/>";

        echo "(4)","<br/>";
        $count = count($day);
        echo $count."<br/>";
        $count = count($a);
        echo $count."<br/>";

        echo "(5)","<br/>";
        $x =array(
            "line1" => array("a1"=>"あ","a2"=>"い","a3"=>"う","a4"=>"え","a5"=>"お"),
            "line2" => array("k1"=>"か","k2"=>"き","k3"=>"く","k4"=>"け","k5"=>"こ"),
            "line3" => array("s1"=>"さ","s2"=>"し","s3"=>"す","s4"=>"せ","s5"=>"そ") 
        );
        foreach($x as $array){
            foreach($array as $key => $val){
                echo $key.$val."<br/>";
            }
        }
    ?>
</body>
</html>