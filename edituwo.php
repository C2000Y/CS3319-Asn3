<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<center>
<h1>Edit course data</h1>
<?php
$value=$_GET['id'];
$ex=explode("|",$value);
$code=$ex[0];
$type=$ex[1];

include 'connectdb.php';
$query='select * from westerncourse WHERE westernnum="'.$code.'"';
$result=mysqli_query($connection,$query);
	if (!$result) {
          die("database query failed.");
   }
	if($type=="name"){
	echo "Enter Name:";
?>
	<form action="edituwoName.php" method="post">
	<input type="hidden" name="id" value="<?php echo $code;?>"/>
	<input type="text" name="change"/>
	<input type="submit" value="update"/>
	</form>
<?php
	}
	else if($type=="weight"){
	echo "Enter Weight:";
?>
	<form action="edituwoWeight.php" method="post">
	<input type="hidden" name="id" value="<?php echo $code;?>"/>
	<input type="text" name="change"/>
	<input type="submit" value="update"/>
	</form>
<?php	
	}
	else{
	echo "Enter Suffix:";
?>
	<form action="edituwoSuffix.php" method="post">
	<input type="hidden" name="id" value="<?php echo $code;?>"/>
	<input type="text" name="change"/>
	<input type="submit" value="update"/>
	</form>	
<?php	
	}

?>			

</center>
<?php
mysqli_close($connection);
?>
</body>
</html>