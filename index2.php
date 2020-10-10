<?php
echo 'Hello,PHP';
echo '<br>';
echo '10+7';
?>
<?php
$name = 'Tom';
echo 'My name is'.$name;
$name = 'Bob';
echo 'My name is'.$name;
?>
<?php
$price = 1000;
$taxRate = 0.08;
$totalPrice = $price + $price * $taxRate;
echo '税込価格は'.$totalPrice.'円です';
$price = 2400;
$taxRate = 0.1;
$totalPrice = $price + $price * $taxRate;
echo '税込価格は'.$totalPrice.'円です';
?>
<?php
$money = 2000;
$price = 1000;
$taxRate = 0.08;
$includeTaxPrice = $price + $price * $taxRate;
if($includeTaxPrice < $money){
	echo '商品を買うことができます';
}elseif($includeTaxPrice == $money){
	echo '商品を買うことができますが、所持金がなくなります';
}else{
	echo '商品を買うことができません';
}
?>
<?php
for($i=1;$i<=100;$i++){
	if($i % 3 == 0 && $i % 5 == 0){
		echo 'FizzBuzz';
	}elseif($i % 3 == 0){
		echo 'Fizz';
	}elseif($i % 5 == 0){
		echo 'Buzz';
	}else{
		echo $i;
	}
	echo '<br>';
}?>
<?php
$prices = array(1000,650,750,800);
// 変数totalPriceを定義するが、初期値で0を代入しておく
$totalPrice = 0;
// foreachは配列専門の繰り返し文
foreach($prices as $price){
	// $totalPriceに$priceの配列を次々足し算していく記述
	$totalPrice += $price;
}
echo '合計金額は'.$totalPrice.'円です';
// echo "合計金額は{$totalPrice}円です"この記述でも同じ結果だった（変数展開）
?>
<?php
$prices = array(1000,650,750,800);
$maxPrice = 0;
foreach($prices as $price){
	if($maxPrice < $price){
		$maxPrice = $price;
	}
}
echo '最高価格は'.$maxPrice.'円です';
?>
<?php
$menu = array('name' => 'CURRY','price' => 900);
echo $menu['name'].'は'.$menu['price'].'円です';
$menu = array('name' => 'PASTA', 'price' => 1200);
echo $menu['name'].'は'.$menu['price'].'円です';
?>
<?php
$menus = array(
	array('name'=>'CURRY','price'=>900),
	array('name'=>'PASTA','price'=>1200),
	array('name'=>'COFFEE','price'=>600)
	);

// 上で定義した配列のmenuが一つずつ$menuに順番に代入されていく
foreach($menus as $menu){
	echo $menu['name'].'は'.$menu['price'].'円です';
}
?>
<?php
$menus = array(
	$menu = array('name'=>'CURRY','price'=>900),
	$menu = array('name'=>'PASTA','price'=>1200),
	$menu = array('name'=>'COFFEE','price'=>600)
);

// totalPriceという変数の初期値を0に設定する
$totalPrice = 0;
foreach($menus as $menu){
	$totalPrice += $menu['price'];
}
	echo '合計金額は'.$totalPrice.'円です';
?>
<?php
$menus = array(
	array('name'=>'CURRY','price'=>900),
	array('name'=>'PASTA','price'=>1200),
	array('name'=>'COFFEE','price'=>600)
);

$maxPrice = 0;
$maxPricename = '';

foreach($menus as $menu){
	if($maxPrice < $menu['price']){
		$maxPrice = $menu['price'];
		$maxPricename = $menu['name'];
	}
	echo $maxPricename.'が最高価格で'.$maxPrice.'円です';
}
?>