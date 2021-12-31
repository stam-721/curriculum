<link rel="stylesheet" href="question.php.css">


<!-- //POST送信で送られてきた名前を受け取って変数を作成 -->
<?php
$name = $_POST['q']; 

?>

<!-- ①画像を参考に問題文の選択肢の配列を作成してください。 -->
<?php
$number = [80,22,20,21];
$language = ["PHP","Python","JAVA","HTML"];
$command = ["join","select","insert","update"];
?>
<!--   ② ①で作成した、配列から正解の選択肢の変数を作成してください -->
<?php
$a = 80;
$b = "HTML";
$c = "select";
?>

<p>お疲れ様です<?php echo $name;?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="POST">
    <input type="hidden" name="$name" value="<?php echo $name; ?>">
    
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
foreach ($number as $value) { ?>
    <input type="radio" name="number" value="<?php echo $value; ?>"><?php echo $value; ?>
    <?php } ?>
     
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
foreach ($language as $value) { ?>
    <input type="radio" name="language" value="<?php echo $value; ?>"><?php echo $value; ?>
    <?php } ?>
    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
foreach ($command as $value) { ?>
    <input type="radio" name="command" value="<?php echo $value; ?>"><?php echo $value; ?>
    <?php } ?>
    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->

    <form action="answer.php" method="POST">

        <input type="hidden" name="q" value="name">
        <input type="hidden" name="$a" value="$number">
        <input type="hidden" name="$b" value="$language">
        <input type="hidden" name="$c" value="$command">



        <br>
        <input type="submit" value="回答する">
    </form>
    
    