<?PHP
require('lib/common.php');

$button_presses = result("SELECT presses FROM button");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<div class="content">
		The button has been pressed <span class="presses"><?=$button_presses?></span> time<?=($button_presses != 1 ? 's' : '')?>.
	</div>
</body>
</html>