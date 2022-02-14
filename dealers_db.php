<?php
$uname=$_POST["fname"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$nature=$_POST["nature of material"];
$weight=$_POST["weight of material"];
$conn=mysqli_connect("localhost","root","");
if($conn){
	$db=mysqli_select_db($conn,"transport");
	if($db){
	
		$sql="insert into `dealer` values ('".$uname."','".$pass."','".$email."','".$mobile."','".$nature."','".$weight."')";
		$res=mysqli_query($conn,$sql);
		if($res){
			echo "<script>alert('Account created successfully');window.location.href='signin.html';</script>";
		}
		else{
			echo  "<script>alert('please check your details again');window.location.href='dealersignup.html';</script>";
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