<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


</head>
<body>
<?php
	

echo "<table border='1'>";
$conn=mysqli_connect("localhost","root","");
		if($conn){
		$db=mysqli_select_db($conn,"transport");
		if($db){
		$sql="SELECT dr.fname ,dr.age,dr.phone,dr.tnumber,dr.tcapacity,dr.tname
        FROM driver dr JOIN dealer de 
        ON (de.s1 = dr.from1 ) or (de.s1 = dr.to1) or (de.s1 = dr.from2 ) or (de.s1 = dr.to2) or (de.s1 = dr.from3) or (de.s1 = dr.to3 ) or  
           (de.s2= dr.from1 ) or (de.s2 = dr.to1) or (de.s2 = dr.from2 ) or (de.s2 = dr.to2) or (de.s2 = dr.from3) or (de.s2 = dr.to3 ) or
           (de.s3 = dr.from1 ) or (de.s3 = dr.to1) or (de.s3 = dr.from2 ) or (de.s3 = dr.to2) or (de.s3 = dr.from3) or (de.s3 = dr.to3 )  ;";
		$result= $conn->query($sql);
		echo "<table class='table table-bordered border-dark table-hover table-success'>";
		if(($result->num_rows)>0){
			while($row=$result->fetch_assoc()){
				echo "<tr>";
				echo "<td align='center'>"."<br>"."name: ".$row["fname"]."<br>" ."Cost: ".$row["age"]."<br>" ."Qunatity/Weight: ".$row["tname"]."<br>". "</td>";
			    echo "</tr>";
			}
			echo "</table>";
			echo "<center>"."<a href=''>"."HOME"."</a>"."</center>";
		}
		else{
			echo "<script>alert('no products');window.location.href='display.php';</script>";
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>