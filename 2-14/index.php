<?php 

// count  要素の数を数える
$country = ["america", "africa", "canada", "pekin", "japan","china"];
echo count($country);
echo "<br>";



// sort  要素の並び替え  名前　数字
$members = ["inoue", "abe", "sato", "nishimura", "kobayashi","ikeda"];
sort($members);
var_dump($members);
echo "<br>";
$number = [3,8,5,7,9,6,2,4,1,10];
sort($number);
var_dump($number);
echo "<br>";

// in_array  配列に中にある要素が存在しているか
$members = ["inoue", "abe", "sato", "nishimura", "kobayashi","ikeda"];
var_dump(in_array("abe", $members));
echo "<br>";


// implode（配列を結合して文字列に変換）
$members = ["inoue", "abe", "sato", "nishimura", "kobayashi","ikeda"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";




// explode（文字列を指定の区切りで配列にする）
$members = ["inoue", "abe", "sato", "nishimura", "kobayashi","ikeda"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";
$re_member = explode("@",$atstr);
var_dump($re_member);
echo "<br>";
$number = [7,8,2,6,5,3,4];
$atstr = implode("@", $number);
var_dump($atstr);
echo "<br>";
$re_number =explode("@",$atstr);
var_dump($re_number);

?>