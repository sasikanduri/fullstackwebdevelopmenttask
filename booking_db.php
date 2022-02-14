<?php
$driver_name=$_POST["dename"];
$dealer_name=$_POST["drname"];
$address=$_POST["address"];
$route=$_POST["route"];
$date=$_POST["date"];
$time=$_POST["time"];
$conn=mysqli_connect("localhost","root","");
if($conn){
	$db=mysqli_select_db($conn,"transport");
	if($db){
	
		$sql="insert into `dealer_book` values ('".$driver_name."','".$dealer_name."','".$address."','".$route."','".$date."','".$time."')";
		$res=mysqli_query($conn,$sql);
		if($res){
			echo "<script>alert('Successfully booked');window.location.href='dealersMain.php';</script>";
		}
		else{
			echo  "<script>alert('technical error!');window.location.href='booking.php';</script>";
		}
	}
	else{
		echo "db is not selected";
	}	
}
else{
	echo "not connected";
}
mysqli_close($conn);
?>