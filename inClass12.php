<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	$truth = TRUE;
	$truth2 = 1;
	$lie = FALSE;
	$lie2= 0;

	$food="fish";
	$cat='little buddy';

	$number= 87;
	$float = 3.14;

	echo ($cat);
	echo "eats";
	echo $food;

	echo "<pre>";
		var_dump($truth);
		var_dump($cat);
		var_dump($food);
		var_dump($lie);
		var_dump($truth2);
		var_dump($lie2);
		var_dump($float);
	echo "</echo>";

function appleCounter ($bucketSize){
	$x =1;

	while ($x<=$bucketSize) {
		
		if ($x==1) {
			echo $x."apple ";
			echo "<br>";
		} else {
		echo $x."apples ";
		echo "<br>";
	}
		$x ++;
	}
}

appleCounter(11);


	$the_condition=TRUE;
	if(the_condition){
		echo "Little buddy";
	}else{
		echo "No Buddy";
	};
?>

</body>
</html>
