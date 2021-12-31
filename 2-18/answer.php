<link rel="stylesheet" href="answer.php.css">
<!-- [question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成 -->
<?php
$name = $_POST['$name'];
$number = $_POST['number'];
$language = $_POST['language'];
$command = $_POST['command'];
?>
<p><?php  $number;?></p>
<p><?php  $language;?></p>
<p><?php  $command;?></p>

<?php
$number = 80;
$language = "HTML";
$command = "select";
?>
<!-- 選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する -->
<?php  
$number = $_POST['number'];
$a = ($number==="80") ? "正解!":"残念・・・";
?>
<?php

$number = $_POST['language'];
$b = ($number==="HTML") ? "正解!":"残念・・・";
?>
<?php
$number = $_POST['command'];
$c = ($number==="select") ? "正解!":"残念・・・";
?>
<p><?php echo $name ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
echo "$a" ?>


<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
echo "$b" ?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
echo "$c" ?>
