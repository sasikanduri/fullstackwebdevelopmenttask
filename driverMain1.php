<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Document</title>
	<script>
		
	</script>
</head>
<body>
<h1 align="center" style="color:black">YOUR BOOKED DETAILS</h1>
<a href="driverMain.php"><input type="submit" class="btn btn-danger float-right" value="HOME" ></a>
<?php
$username = $_POST["user"];
echo "<table border='1'>";
$conn=mysqli_connect("localhost","root","");
		if($conn){
		$db=mysqli_select_db($conn,"transport");
		if($db){
		$sql="select dealer_name,pickup_add,sel_route,date,time from dealer_book where driver_name='".$username."'";
		$result= $conn->query($sql);
		echo "<table class='table table-bordered border-dark table-hover table-success'>";
		if(($result->num_rows)>0){
			while($row=$result->fetch_assoc()){
				echo "<tr>";
				echo "<td align='center'>"."<br>"."Dealer name: ".$row["dealer_name"]."<br>" ."Pick up address: ".$row["pickup_add"]."<br>" ."Selected Route: ".$row["sel_route"]."<br>"."Pickup Date: ".$row["date"]."<br>" ."Pickup date : ".$row["date"]."<br>". "</td>";
			    echo "</tr>";
			}
			echo "</table>";
		}
		else{
			echo "<script>alert('no one booked your Vehicle');</script>";
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
