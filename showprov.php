<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>University</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>

<?php
include 'connectdb.php';
	$prov=$_POST["prov"];
	?>
	<h1 style="text-align:center;">University in <?php echo $prov; ?></h1>
	<p><hr><p>
	<body>
<?php
	$query='SELECT * FROM university WHERE prov="'.$prov.'"';
	$result=mysqli_query($connection,$query);
	if (!$result) {
          die("database query failed.");
   }
	while($row=mysqli_fetch_assoc($result)){
	echo "<li>".$row["uniname"]."(".$row["nickname"].")"."</li>";
	}
?>
</table>
</body>
<a href='uni.php'><input type='button' value='Back' /></a>
</head>
</html>
