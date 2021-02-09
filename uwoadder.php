<?php
	include 'connectdb.php';
	$value=$_POST['Code'];
	$name=$_POST["Name"];
	$weight=$_POST["weight"];
	$suffix=$_POST["suffix"];
	
	if(!empty($value)&&!empty($name)&&!empty($weight)&&!empty($suffix)&&is_numeric($weight)&&substr($value,0,2)=="cs"){
		$ifexist="SELECT * FROM westerncourse WHERE westernnum='{$value}'";
		$result1=mysqli_query($connection,$ifexist);
		if (!$result1) {
			die("database query failed,(please check the input??)");
		}
		$row=mysqli_fetch_assoc($result1);
		
		if(empty($row)){
			$insert="INSERT INTO westerncourse VALUES('{$value}','{$name}','{$weight}','{$suffix}')";
			$result=mysqli_query($connection,$insert);
			if (!$result) {
				die("database query failed,(please check the input??)");
			}
			$url = "http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uwocourse.php";
			echo "<script type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
		else{
			echo "Already Exist in the table!!!";
			echo "<a href='addUWO.php'><input type='button' value='Back' /></a>";
		}
	}		
	
	else{
		$url = "http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/addUWO.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}

?>

