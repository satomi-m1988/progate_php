<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Progate</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<body>
		<?php echo 'Hello, world'; ?>
		<br>
		<?php echo 7 * 2; ?>
		<br>
		<?php echo 8 % 3; ?>
		<br>
		<?php echo 5 + 7; ?>
		<br>
		<?php echo '5 + 7'; ?>
		<br>
		<?php
		 $fruit = 'りんご';
		 echo $fruit;
		?>
		<br>
		<?php
		 $sum = 8 + 9;
		 echo $sum;
		?>
		<br>
		<?php
		 $x = 5;
		 $y = 2;
		 $a = 8;
		 $b = 4;
		?>
		<br>
		<?php
		 $x += 10;
		 echo $x
		?>
		<br>
		<?php
		 $y *= 5;
		 echo $y;
		?>
		<br>
		<?php
		 $a++;
		 echo $a;
		?>
		<br>
		<?php
		 $b--;
		 echo $b;
		?>
		<br>
		<?php
		 $name = 'にんじゃわんこ';
		 echo "こんにちは！${name}";
		?><br>
		<?php
		 $x = 99 * 99;
		 $y = 77 * 77;

		 if($x > 9800){
		 	echo '変数xは9800より大きいです。';
		 }
		 if($y > 6000){
		 	echo '変数yは6000より大きいです。';
		 }
		?><br>
		<?php
		 $age = 32;
		 if($age >= 30){
		 	echo 'あなたは30歳以上です。';
		 }else{
		 	echo 'あなたは30歳未満です。';
		 }
		?><br>
		<?php
		 $x = 1071;

		 if($x % 3 == 0 && $x % 7 == 0){
		 	echo 'xは3の倍数かつ7の倍数です。';
		 }elseif($x % 3 == 0){
		 	echo 'xは3の倍数ですが7の倍数ではありません。';
		 }elseif($x % 7 == 0){
		 	echo 'xは7の倍数ですが3の倍数ではありません。';
		 }else{
		 	echo 'xは7の倍数でも3の倍数でもありません。';
		 }
		?><br>
		<?php
		 $num = 7;
		 $remainder = $num % 3;

		 switch($remainder){
		 	case 0:
		 	 echo '大吉です。';
		 	break;
		 	case 1:
		 	 echo '中吉です。';
		 	break;
		 	case 2:
		 	 echo '小吉です。';
		 	break;
		 	default:
		 	 echo '凶です。';
		 	break;
		 }?>


	</body>
</html>