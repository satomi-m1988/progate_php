<?php
class Menu{
	// Menuクラスの中でプロパティの定義 privateで定義しているのでクラスの外からはアクセス不可能
	private $name;
	private $price;
	private $image;

	// newによってインスタンスが生成されると自動的に呼び出されるconstruct関数を定義
	public function __construct($name, $price, $image){
		$this -> name = $name;
		$this -> price = $price;
		$this -> image = $image;
	}

	// 各プロパティはクラスの外ではアクセス不可能なのでgetメソッドを使ってクラスの外からアクセスできるようにする
	public function getName(){
		return $this -> name;
	}
	public function getImage(){
		return $this -> image;
	}
	public function getTaxIncludedPrice(){
		return floor($this -> price * 1.08);
	}

}?>