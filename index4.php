<?php require_once('data.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Progate</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<body>
		<h3>cafe Progate</h3>
		<!-- 配列の繰り返し文foreachで配列の先頭から表示させる -->
		<?php foreach( $menus as $menu): ?>
			<img src="<?php echo $menu -> getImage(); ?>">
			<?php echo $menu -> getName(); ?>
			<p><?php echo $menu -> getTaxIncludedPrice(); ?>(税込)</p>
		<?php endforeach ?>
	</body>
</html>