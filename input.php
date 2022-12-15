<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="input.css" rel="stylesheet">
  <title>好きな韓国料理アンケート（入力画面）</title>
</head>

<body>
  <div class="home">
  <form action="create.php" method="POST"> 
    <fieldset>
      <legend>好きな韓国料理アンケート（入力画面）</legend>
      <a href="read.php">一覧画面</a>
      <div>
        氏名: <input type="text" name="name">
      </div>
      <div>
        韓国料理: <input type="text" name="food">
      </div>
      <div>
        入力日: <input type="date" name="deadline">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>
  </div>
</body>

</html>