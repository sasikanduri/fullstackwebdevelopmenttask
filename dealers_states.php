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
	<h1 align="center" style="color:black">AVAILABLE DRIVERS</h1>
	
	      <a href="booking.php"><input type="submit" class="btn btn-danger float-right" value="BOOK TRUCK"/></a>
    
          <a href="dealers_states.php"><input type="submit" class="btn btn-primary float-right" value="HOME" ></a>
          
<?php
$s1=$_POST["s1"];
$s2=$_POST["s2"];
$s3=$_POST["s3"];

$conn=mysqli_connect("localhost","root","");
if($conn){
	$db=mysqli_select_db($conn,"transport");
	if($db){
	
		$sql="insert into `dealer_routes` values ('".$s1."','".$s2."','".$s3."')";
		$res=mysqli_query($conn,$sql);
		$sql="select fname,tnumber,tcapacity,tname,experience,from1,to1,from2,to2,from3,to3 from `driver` where 
        (from1='".$s1."') or (to1='".$s1."') or (from2='".$s1."') or( to2='".$s1."') or (from3='".$s1."') or (to3='".$s1."') or
        (from1='".$s2."') or (to1='".$s2."') or (from2='".$s2."') or( to2='".$s2."') or (from3='".$s2."') or (to3='".$s2."') or
        (from1='".$s3."') or (to1='".$s3."') or (from2='".$s3."') or( to2='".$s3."') or (from3='".$s3."') or (to3='".$s3."') ;";
		$result= $conn->query($sql);
        $no_of_rows=mysqli_num_rows($result);
		echo "<table class='table table-bordered border-dark table-hover table-success'>";
		if($no_of_rows!=0){
			while($row=$result->fetch_assoc()){
				echo "<tr>";
				echo "<td align='center'>"."<br>"."Driver Name: ".$row["fname"]."<br>" ."Truck Number: ".$row["tnumber"]."<br>".
                "Truck Capacity: ".$row["tcapacity"]."<br>" ."Truck Name: ".$row["tname"]."<br>" ."Experience: ".$row["experience"]."<br>" ."Interested Routes: "."<br>" ."First Route: ".$row["from1"]."&nbsp" .$row["to1"]."<br>"."Second Route: ".$row["from2"]."&nbsp" .$row["to2"]."<br>"."Third Route: ".$row["from3"]."&nbsp" .$row["to3"]."<br>".
				"</td>";
			    echo "</tr>";
			}
			echo "</table>";
			
			
		
		}
		else{
			echo  "<script>alert('No results found');window.location.href='dealersMain.php';</script>";
           
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

