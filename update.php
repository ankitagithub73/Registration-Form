<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data update page</title>
	<!-- bootstrap css link -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
     <?php
    include('dbconnection.php');

     $id =  $_GET['id']??"";
    
	$query = "select * from employee where id = '$id'";
	$row = mysqli_query($con,$query);
	$data = mysqli_fetch_array($row);
?>
<div class="container">
	<div class="row">
	<div class="col-md-4 col-md-offset-4" style="-webkit-box-shadow: -2px 1px 18px 2px rgba(0,0,0,0.75);
            -moz-box-shadow: -2px 1px 18px 2px rgba(0,0,0,0.75);box-shadow: -2px 1px 18px 2px rgba(0,0,0,0.75); margin-top:50px; padding:20px;border-radius:10px;">
     
	 <form action="update.php" method="post">
	           <div>
					<h1 class="well text-center">UPDATE DATA</h1>
                </div>

	          <input type="hidden" name="id" value="<?php $data[0]; ?>">

		      <label>Name :</label>
		      <input class="form-control" type="text" name="name" required value="<?php echo $data[1]; ?>">
              <br>

		      <label>Age:</label>
		      <input class="form-control" type="text" name="age" required  value="<?php echo $data[2]; ?>">
              <br>

		      <label>Designation :</label>
		      <input  class="form-control"type="text" name="designation" required value="<?php echo $data[3]; ?>">
              <br>

		      <label>Salary :</label>
		      <input class="form-control" type="text" name="salary" required  value="<?php echo $data[4]; ?>">
              <br>
		     <input type="submit" name="UpdateBtn" value="Update"  class="btn btn-info btn-block">

	  </form>
</div>
</div>
</div>
	<?php
       include('dbconnection.php');

       if(isset($_POST['UpdateBtn'])){
          $id = $_POST['id'];
       	$name = $_POST['name'];
 	     $age = $_POST['age'];
 	     $desig = $_POST['designation'];
 	     $salary = $_POST['salary'];

 	     $query = "update employee set name='$name', age='$age',designation='$desig',salary='$salary' where id='$id'";
 	     $run = mysqli_query($con,$query);
 	     if($run){
 	     	
 	     	echo "<script>alert('Data Updated successfully!!');
               window.location.href = 'view.php';
            </script>";
 	     }
 	     else{
			echo"<script>alert('Data Not Updated!!')</script>";

 	     }

       }
?>

</body>
</html>