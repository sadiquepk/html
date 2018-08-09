<!DOCTYPE>
<html>
<head>
	<title>FIBNOCCHI</title>
</head>
<body>
<?php
function printFibonacci($n)
{
$a=0;
$b=1;
echo $a.''.$b.'';
for ($i=2; $i <$n ; $i++) { 
	
	$c=$a + $b;
	echo "$c";

	$a=$b;
	$b=$c;

}
}
printFibonacci(6)
?>
</body>
</html>