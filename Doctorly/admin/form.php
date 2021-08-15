<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<?php  include_once '../inc/head.php';?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title></title>
    	<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    	<h1 class="text-center col-md-6">FORM</h1>
    <form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Hospital Name</label>
      <input type="text" class="form-control" id="inputEmail4" name="hname" placeholder="Name of the Hospital">
    </div>
</div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Private/Government</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Private/Goverment" name="typee">
    </div>
</div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Type of Hospital</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder=AAMC/Polyclinics" name="typeh">
    </div>
</div>
    <div class="form-row">
    	<div class="form-group col-md-6">
      <label for="inputPassword4">contact no</label>
      <input type="tel" class="form-control" id="inputPassword4" placeholder="9878654XXX" name="cont" maxlength="10">
    </div>
    </div>
    <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress2">Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address">
  </div>
</div>   
    <div class="form-row">
    	<div class="form-group col-md-3">
    <label for="inputAddress">District</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="dist">
  </div>
    <div class="form-group col-md-3">
      <label for="inputState">Sub District</label>
       <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="subd">
    </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputCity">pin code</label>
      <input type="tel" class="form-control" id="inputCity" name="number" placeholder="1100XX" maxlength="6">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">time</label>
      <input type="text" class="form-control" id="inputZip" name="time" placeholder="09am - 05pm">
    </div>
</div>
  
  <input type="submit" name="submit" value="insert data">
</form>
    </body>
    </html>

<?php

include('../connection.php');

if(isset($_POST['submit'])){

$hosname = $_POST['hname'];
$type = $_POST['typeh'];
$hosn = $_POST['typee'];
$hos = $_POST['cont'];
$dist = $_POST['dist'];
$address = $_POST['address'];
$nub = $_POST['number'];
$sub = $_POST['subd'];
$subbb = $_POST['time'];

$sql = "INSERT INTO hospitals(Name_of_hospital, Type_of_hospital, Private, Contact_no, District, Full_address, Pincode, Sub_district, Timing) VALUES ('$hosname','$type','$hosn','$hos','$dist','$address','$nub','$sub','$subbb')" ;
$run = mysqli_query($conn,$sql);

if($run==true){
  ?>
  <script type="text/javascript">
      alert('data is inseted');
      window.open('form.php','_self');
  </script>
  <?php
    }
    else{
        ?>
         <script type="text/javascript">
      alert('fffffffff');
      window.open('form.php','_self');
  </script>
  <?php
        
    }
}
?>