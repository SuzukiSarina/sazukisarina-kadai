<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>関数課題＿関数</title>
</head>
<body>
    <?php
       function add($x,$y){
           $x = $x+$y;
           return $x;
       }

       function sub($x,$y){
           $x = $x-$y;
           return $x;
       }

       function mul($x,$y){
           $x = $x*$y;
           return $x;
       }

       function div($x,$y){
           $x = $x/$y;
           return $x;
       }

       function sur($x,$y){
           $x = $x%$y;
           return $x;
       }


       function add2(&$a,&$b){
        $a = $a+$b;
        return $a;
       }
       function sub2(&$a,&$b){
        $a = $a-$b;
        return $a;
       }
       function mul2(&$a,&$b){
        $a = $a*$b;
        return $a;
       }
       function div2(&$a,&$b){
        $a = $a/$b;
        return $a;
       }
       function sur2(&$a,&$b){
        $a = $a%$b;
        return $a;
       }

    ?>
</body>
</html>