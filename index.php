<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

    <header>
        <div class="header-logo">ジャンケン大会</div>
    </header>



    <div class = "mainClass">

    <p class = "mause"><img src = "wanezumi1.png"  height = "300" ><p>
      <h1>Let's　battle</h1>
      <div class="form-box">
          <form action="battle.php" method="post">
              <label>
                 <input type="submit" title="playerHand" name="playerHand" value="グー" class="button">
              </label>
              <label>
                 <input type="submit" title="playerHand" name="playerHand" value="チョキ" class="button">
              </label>
              <label>
                 <input type="submit" title="playerHand" name="playerHand" value="パー" class="button">
              </label>
          </form>
      </div>

    </div>

</body>
</html>
