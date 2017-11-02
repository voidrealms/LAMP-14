<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

$i = 1;

//While loop
while ($i <= 10)
{
	echo $i . "<br>";
	$i++;
	
	if($i == 5)
	{
		break;
	}
}
echo "Finished<br>";

//Do loop
do
{
	echo $i . "<br>";
	$i--;
	
	if($i < 2) break;
	
	
} while ($i > 0);

echo "Finished<br>";
?>

</body>
</html>
