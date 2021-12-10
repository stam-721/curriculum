<?php 


// ceil 切り上げ
    $x = 3.1;
    echo ceil($x);
    echo "<br>";




// floor 切り捨て
    $x = 52.7;
    echo floor($x);
    echo "<br>";
   



// round　四捨五入
    $x = 10.6;
    echo round($x);
    echo "<br>";
 


// pi  円周率

    echo pi();
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    circleArea(10);
    
    echo "<br>";



// mt_rand    乱数
    echo mt_rand(1, 50);
    echo "<br>";



// strlen 文字列の長さ
    $str = "Tokyo";
    echo strlen($str);
    echo "<br>";


// strpos  検索
    $str = "study";
    echo strpos($str, "d");
    echo "<br>";


// substr  文字列の切り取り
    $str = "programming";
    echo substr($str, -6,4 );
    echo "<br>";


// str_replace  置換
    $str = "programming";
    echo str_replace("ramming", "RAMMING", $str);
    echo "<br>";

// printf   文字列を出力
    $name = "米山さん";
    $limit_hour = 40;
    $limit_minute =30;
    printf("残り%02d時間%02d分",$limit_hour,$limit_minute);
    echo "<br>";



// sprintf  変数に代入できるprintf
    $limit_hour = 1;
    $limit_minute =30;
    $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo $limit_time;


    ?>