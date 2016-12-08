<html>
<head>
</head>
<body>
	<form action="TipCalculator_html.php" method="post">
		Bill Subtotal: <input type="text" name="billSubtotal" value="<?php echo $name;?>">
		<br><br>
		Tip Percentage:
		<input type="radio" name="tip"
		<?php if (isset($tip) && $tip=="10$") echo "checked";?>
		value="10%">10%
		<input type="radio" name="tip"
		<?php if (isset($tip) && $tip=="15%") echo "checked";?>
		value="15%">15%
		<input type="radio" name="tip"
		<?php if (isset($tip) && $tip=="20%") echo "checked";?>
		value="20%">20%

		<input type="submit" value="Send">
		<br><br>
	</form>
	<?php
	$input = $_POST['billSubtotal'];

	// use it

	echo "Your total is: <i>$input</i>";

	?> 
	

</body>
</html>