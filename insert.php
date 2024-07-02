<?php

 include("dbconnection.php");

 if(isset($_POST['SubmitBtn'])){

 	  $name = $_POST['name'];
 	  $age = $_POST['age'];
 	  $desig = $_POST['designation'];
 	  $salary = $_POST['salary'];


 	  $query = "insert into employee(name,age,designation,salary) values('$name','$age','$desig','$salary')";

 	   $run = mysqli_query($con,$query);

 	   if($run){
 	   	echo "<script>alert('Data Inserted');
            window.location.href = 'view.php';
            </script>";
 	   	// echo "<a href='home.php'>Click to insert more recoreds</a>";
 	   }
       else{
	    echo "Data Not Inserted!!";
         }

 }









?>