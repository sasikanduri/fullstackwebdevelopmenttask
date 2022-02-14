<?php 
$mail=$_POST['email'];
$pass=$_POST['pass'];
$conn=mysqli_connect("localhost","root","");
		if($conn){
		$db=mysqli_select_db($conn,"transport");
		if($db){
		$sql="select * from `dealer` where email='$mail' and pass='".$pass."'";
		$result= $conn->query($sql) or die("something went wrong".$conn->error);
		$no_of_rows=mysqli_num_rows($result);
		if($no_of_rows==0){
			echo "<script>alert('Invalid Email/password');window.location.href='dealeremlogin.html';</script>";
		}
		else{
			header("Location:dealersMain.php");
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