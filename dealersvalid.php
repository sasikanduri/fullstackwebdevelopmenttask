<?php 
$name=$_POST['user'];
$pass=$_POST['pass'];
session_start();

$conn=mysqli_connect("localhost","root","");
		if($conn){
		$db=mysqli_select_db($conn,"transport");
		if($db){
		$sql="select * from `dealer` where fname='$name' and pass='".$pass."'";
		$result= $conn->query($sql) or die("something went wrong".$conn->error);
		$no_of_rows=mysqli_num_rows($result);
		if($no_of_rows==0){
			echo "<script>alert('Invalid Username/password');window.location.href='signin.html';</script>";
		}
		else{
			header("Location:dealersMain.php");
		}
		}
		else{
		echo "db is not selected".mysqli_error();
	}	
}
else{
	echo "not connected";
}
mysqli_close($conn);
			
?>