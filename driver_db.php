<?php
$uname=$_POST["fname"];
$pass=$_POST["pass"];
$mail=$_POST["email"];
$age=$_POST["age"];
$phn=$_POST["phone"];
$tno=$_POST["tnumber"];
$tcap=$_POST["tcapacity"];
$tnm=$_POST["tname"];
$exp=$_POST["experience"];
$f1=$_POST["from1"];
$t1=$_POST["to1"];
$f2=$_POST["from2"];
$t2=$_POST["to2"];
$f3=$_POST["from3"];
$t3=$_POST["to3"];
$conn=mysqli_connect("localhost","root","");
if($conn){
	$db=mysqli_select_db($conn,"transport");
	if($db){
	
		$sql="insert into `driver` values ('".$uname."','".$pass."','".$mail."','".$age."','".$phn."','".$tno."','".$tcap."','".$tnm."','".$exp."','".$f1."','".$t1."','".$f2."','".$t2."','".$f3."','".$t3."')";
		$res=mysqli_query($conn,$sql);
		if($res){
			echo "<script>alert('account created succesfully');window.location.href='driversignin.html';</script>";
		}
		else{
			echo  "<script>alert('Please check all details again!');window.location.href='driversignup.html';</script>";
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