<?php
class Menu{
	public $name;
	public function hello(){
		echo '私は'.$this -> name.'です';
	}
	public function __construct($name){
		$this -> name = $name;
		echo '１つのメニューが作られました';
	}
}
$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');

// $curry -> name = 'CURRY';
// $pasta -> name = 'PASTA';

echo $curry -> name;
echo '<br>';
echo $pasta -> name;

$curry -> hello();
$pasta -> hello();
?>
<p><?php echo $curry -> name ?></p>
<p><?php echo $pasta -> name ?></p>