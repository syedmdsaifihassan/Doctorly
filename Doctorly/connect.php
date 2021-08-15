<?php include_once'inc/head.php'?>
<?php include_once'inc/header.php'?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#data {
			color: red;
		}

	</style>
</head>
<body>
	<!-- <div class="container">
		<div class="row">
			<div class="col-md">
				<div id="data"></div>
			</div>
			<div class="col-md"><div id="data"></div></div>
		</div>
	</div> -->

	<!-- <table>
		
     <tr>
     	<th>Name</th>
     	<th>Address</th>

     </tr>
	</table> -->
	<style type="text/css">
		table {
			width: 100%;
		}
	</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freedoctors";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$add=$_POST['secdd'];
$sql = "SELECT * FROM hospitals where Sub_district= '$add' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){
    	//echo "<br sr:>". $row

    	  echo "<table border='4' class='stats table table-responsive table-hoverable' cellspacing='0' >

            <thead class='thead-dark'>
            	<tr >
		            <th>Name of Hospital</th>
		            <th>Contact Number</th>
		            <th>Full Address</th>
		            <th>Pincode</th>
		            <th>Type of Hospital</th>
		            <th>District</th>
		            <th>Sub District</th>
		            <th>Private/Government</th>

		        </tr>
            </thead>

            ";

              echo "<tr>";
              echo "<td>" . $row["Name_of_hospital"] . "</td>";
              echo "<td>" . $row["Contact_no"] . "</td>";
              echo "<td>" . $row["Full_address"] . "</td>";
              echo "<td>" . $row["Pincode"] . "</td>";
              echo "<td>" .$row["Type_of_hospital"]. "</td>";
              echo "<td>" .$row["District"]. "</td>";
              echo "<td>" .$row["Sub_district"]. "</td>";
              echo "<td>" .$row["Private"]. "</td>";
    echo "</table>";
        // echo "<div class='container'>

        // </div>";
        // echo "<div id='data'>".$row["Name_of_hospital"]."</div>";
    } echo "<table>";

} 
else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
<?php include_once'inc/footer.php'?>