<!DOCTYPE html>
<html>
<head>
	<title>loops</title>
</head>
<body>
<?php
$cars = array('bmw','benz','porche');
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++)
 {
    echo $cars[$x];
    echo "<br>";
}

$age = array('peter' =>35 ,'joe'=>44,'mak'=>50);
foreach($age as $x => $x_value)
 {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

?>
</body>
</html>