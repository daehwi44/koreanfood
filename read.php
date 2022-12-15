<?php

$str = '';

$file=fopen("data/todo.txt","r");
flock($file,LOCK_EX);

if($file){
while($line = fgets($file)){
 $str .="<tr><td>{$line}</tr></td>";
}
}

flock($file,LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>好きな韓国料理アンケート（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>好きな韓国料理アンケート（一覧画面）</legend>
    <a href="input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>好きな韓国料理</th>
        </tr>
      </thead>
      <tbody>
      <?= $str ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>