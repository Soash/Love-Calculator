<?php
/*
//creating connection between mysqlDB
include 'config.php';
$con = new mysqli($host,$username,$password);
if($con->connect_error)
	{die("Error : ".$con->connect_error);}

//creating new database
$cdb_sql = "CREATE DATABASE IF NOT EXISTS LoveC";
$creat_db = $con->query($cdb_sql);
if(!$creat_db)
	{echo "Error Database.<br>";}
*/

//creating table
include 'config.php';
$con = new mysqli($host,$username,$password,$database);
if($con->connect_error)
	{die("Error : ".$con->connect_error);}
	
$ctb_sql = 
"CREATE TABLE IF NOT EXISTS `UserInfo` (
 `id` int(12) NOT NULL AUTO_INCREMENT,
 `YourName` varchar(16) NOT NULL,
 `CrushName` varchar(16) NOT NULL,
 PRIMARY KEY (`id`)
)";
$creat_table = $con->query($ctb_sql);

if(!$creat_table)
	{echo "Error Table<br>";}

//Insert Data
$Yname=$_POST['Yname'];
$Cname=$_POST['Cname'];

$sql="
INSERT INTO `UserInfo`(Yourname,CrushName)
VALUES('".$Yname."',
       '".$Cname."')";

$ui = $con->query($sql);
//ui = userinfo
?>

<!DOCTYPE html>
<html>
<head>
	<title>Love Calculator</title>
	<meta charset="utf-8">
    <meta name="author" content="Soash">
	<meta name="viewport"
	   content="width=device-width, initial-scale=1.0">
<link href="loveC.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="bg">

<div class="grid-container">

	<div class="item1">Love Calculator</div>
	<div class="item2"> 
		<?php 
		$Yname=$_POST['Yname'];
		$Cname=$_POST['Cname'];
		$percent=rand(1,100);
		$num=$percent;
		echo  $Yname." & ".$Cname."<br>";
		echo "Love = ".$num."% <br>";?>
		
		<div class="gaan">
		<?php
		if ($num>0&&$num<26)
		{
		echo 
		"সে যে বসে আছে একা একা<br>
		রঙিন স্বপ্ন তার বুনতে<br>
		সে যে চেয়ে আছে ভরা চোখে<br>
		জানালার ফাঁকে মেঘ ধরতে";
		}
		if ($num>25&&$num<50)
		{
		echo
		"আম গাছে আম নেই<br>
		 ঢিল কেন মারো<br>
		 তোমার সাথে প্রেম নেই<br>
		 চোখ কেন মারো";
		}
		if ($num>49&&$num<66)
		{
		echo
		"চুমকি চলেছে একা পথে<br>
		সঙ্গী হতে দোষ কি তাতে<br>
		রাগ কর না সুন্দরী গো<br>
		রাগলে তোমায় লাগে<br>
		আরো ভালো";
		}
		if ($num>65&&$num<80)
		{
		echo 
		"পড়ে না চোখের পলক<br>
		কি তোমার রূপের ঝলক<br>
		দোহাই লাগে, মুখটি তোমার<br>
		একটু আঁচলে ঢাকো";
		}
		if ($num>79&&$num<101)
		{
		echo
		"যদি বউ সাজো গো<br>
		আরো সুন্দর লাগবে গো<br>
		বলো বলো আরো বলো<br>
		লাগছে মন্দ নয়<br>
		জীবনের এই স্বপ্ন ওগো<br>
		সত্যি যেন হয়";
		}
		?>
		</div>
	</div>
	<div><a href="index.html">Calculate Again</a></div>
	<div><b>Take screenshot &<br>share with friends.<br>
		 Have Fun😁<br>Thank You😇</b>
	</div>
	
</div>

</div>
</body>
</html>

