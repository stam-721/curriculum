<?php
$color = ["red"=>"赤","blue"=>"青","green"=>"緑"];
echo $color["red"];
echo $color["blue"];
echo $color["green"];
var_dump($color);
echo "<br>";
$color = ["red"=>"赤","blue"=>"青","green"=>"緑"];
$color["yellow"] = "黄色";
echo $color["red"];
echo $color["blue"];
echo $color["green"];
var_dump($color);
?>