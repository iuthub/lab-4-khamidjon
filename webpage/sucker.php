<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
<body>




<?php

	if(isset($_POST["name"]) && $_POST["name"] != "" && 
isset($_POST["section_num"]) && $_POST["section_num"] != "(Select a selection)" &&
		isset($_POST["cc_num"]) && $_POST["cc_num"] != "" &&
		isset($_POST["cc"]) && $_POST["cc"] != ""){

	$name = $_POST["name"];
	$section = $_POST["section_num"];
	$credit_card_num = $_POST["cc_num"];
	$cCard = $_POST["cc"];

	$file = 'suckers.txt';
	$line = $name.";".$section.";".$credit_card_num.";".$cCard.PHP_EOL;
	
	file_put_contents($file, $line, FILE_APPEND);


?>
<h1>Thanks, sucker!</h1>
<p>Information has been recorded!</p>
<dl>
	<dt>Name</dt>
	<dd><?php echo $name ?></dd>

	<dt>Section</dt>
	<dd><?php echo $section ?></dd>

	<dt>Credit Card</dt>
	<dd><?php echo $credit_card_num ?> (<?php echo $cCard ?>)</dd>
</dl>

<p>Here all suckers who have submitted here:</p>
<?php
	$file = file_get_contents("suckers.txt");
	echo "<pre>".$file."</pre>";
?>
<?php  
}else{ ?><h1>Sorry</h1><?php 
		echo "You didn't fill out the form copmpletely!";?><a href="buyagrade.html"> Try again?</a>
		<?php
	}
?>

</body>
</html>
