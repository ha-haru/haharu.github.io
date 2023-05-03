<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>不確かさ</title>
    <link rel="stylesheet" href="Futashikasa.css">
</head>
<body>
    <div class="center">
    <h1>計算結果</h1>
    <div class="big">
    <?php
   $number1 = floatval($_POST["number1"]);
   $number2 = floatval($_POST["number2"]);
   $number3 = floatval($_POST["number3"]);
   $number4 = floatval($_POST["number4"]);
   $number5 = floatval($_POST["number5"]);
   $number6 = floatval($_POST["number6"]);
   $number7 = floatval($_POST["number7"]);
   $number8 = floatval($_POST["number8"]);
   $number9 = floatval($_POST["number9"]);
   $number10 = floatval($_POST["number10"]);
   $number11 = floatval($_POST["number11"]);

   $aryHoge = array($number1, $number2, $number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10, $number11);
   
   $count = 0 ;

   foreach($aryHoge as $value){
    if($value > 0){
        $count++;
    } //要素の数
   }
   if($count == 0){
    echo "正しい値が入力されていません";
   }else{
    $ave = array_sum($aryHoge) / $count; //平均
    
    $ave2 = 0 ;

    foreach($aryHoge as $a){
     if($a > 0){
        $ave2 += pow(($a - $ave), 2); //(平均-それぞれの数字)の二乗の和
    }};

    $variance = $ave2 / ($count - 1); //分散
    $sd = sqrt($variance);                 //標準偏差

    $fu = $sd / sqrt($count);

    echo "平均値 : $ave <br>" ;
    echo "標準偏差 : $sd <br>" ;
    echo "不確かさ : $fu " ;
   };
    ?>
   </div>
</div>
</body>
</html>