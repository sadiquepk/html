<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

//numeical

$arrayName = array('a','b');


for ($i=0; $i <2 ; $i++) { 
echo "$arrayName[$i]";
}

foreach ($arrayName as $value) {
	echo $value;
}

$i=0;
while ( $i< 2) {
echo "$arrayName[$i]";
$i++;
}

?>
</body>
</html>