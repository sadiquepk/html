<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
 
for ($multi=1; $multi <=10; $multi++) { 
	# code...

echo "<table border='1'>";
for ($x=1;$x<=10;$x++)
 {
echo "<tr>";

	# code...
	echo "<td>".$x."</td>"."<td>".'*'."</td>"."<td>".$multi."</td>" ."<td>".'='."</td>"."<td>".$x*$multi."</td>";
echo "<br>";
echo "</tr>";
}
echo "</table>";

}
?>
</body>
</html>