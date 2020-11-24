<?php
$iHand = $_POST["playerHand"];

$GTP = ["グー","チョキ","パー"];
$key = array_rand($GTP);
$pcHand = $GTP[$key];

if($iHand == $pcHand){
  $result = "Draw";
} else if ($iHand == 'グー' && $pcHand == 'チョキ') {
        $result = "Victory";
} else if ($iHand == 'チョキ' && $pcHand == 'パー') {
        $result = "Victory";
} else if ($iHand == 'パー' && $pcHand == 'グー') {
        $result = 'Victory';
} else {
        $result = 'Defeat';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>RESULT</title>
    <link rel="stylesheet" href="style-battle.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
  <div class="header-logo2">ジャンケン大会</div>

  <div class = "resImg">
  <?php if($result == "Victory"): ?>
    <img src = "wanezumi_pink2.png" height = "480">
  <?php elseif($result == "Draw"): ?>
    <img src = "wanezumi_kiiro2.png" height = "480">
  <?php else: ?>
    <img src = "wanezumi_blue2.png" height = "480" class = >
  <?php endif ?>
  </div>

  <p class = "res"><?php echo $result ?></p>

  <div class = "handImg">
  <?php if($iHand == "グー"): ?>
    <img src = "17498.jpg" >
  <?php elseif($iHand == "チョキ"): ?>
    <img src = "17499.jpg" >
  <?php else: ?>
    <img src = "17500.jpg" >
  <?php endif ?>

  <span>vs</span>


  <?php if($pcHand == "グー"): ?>
    <img src = "17498.jpg" >
  <?php elseif($pcHand == "チョキ"): ?>
    <img src = "17499.jpg" >
  <?php else: ?>
    <img src = "17500.jpg" >
  <?php endif ?>
  </div>

</body>
