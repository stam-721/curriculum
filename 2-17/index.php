<?php
// ループ文 × 条件分岐
$x=0;
$i=0;
while($x<40){
    $i++;
    $s=rand(1,6);
    echo "<br>";
    echo $i."回目=".$s."\n";
    $x+=$s;
}   echo "合計".$i."回でゴールしました";
echo "<br>";


// 関数 × 条件分岐

date_default_timezone_set('Asia/Tokyo');
echo "今";
echo date("H時台", time());
echo "です";
echo "<br>";
$h=date("H");
if($h<10){
    echo"おはようございます";
}   elseif ($h<17){
    echo "こんにちは";
}   else {
    echo "こんばんは";
}




?>