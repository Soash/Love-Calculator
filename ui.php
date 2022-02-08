<!DOCTYPE HTML>
<html>
<head>
<title>User Info</title>
	<meta charset="utf-8">
    <meta name="author" content="Soash">
	<meta name="viewport"
	   content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php
include 'config.php';
$con = new mysqli($host,$username,$password,$database);
	if($con->connect_error)
	{die("Error : ".$con->connect_error);}

$table = $con->query("SELECT * FROM `UserInfo` ORDER BY `YourName` ASC;");
	
echo "<table border='1'>
<caption>Love Calculator</caption>
<tr>
<th>Your Name</th>
<th>Crush Name</th>
</tr>";

while($row = $table->fetch_array())
{
echo "<tr>";
echo "<td>".$row['YourName']."</td>";
echo "<td>".$row['CrushName']."</td>";
echo "</tr>";
}
echo "</table>";
?>

</body>
</html>

