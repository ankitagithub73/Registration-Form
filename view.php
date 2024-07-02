<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data View Page</title>
	
	<!-- bootstrap css link -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
</head>
<body>
</body>
<?php

    include('dbconnection.php');

    $query = "select * from employee";
	if(isset($_GET['SearchBtn']))
	{
		$SearchBy = $_GET['SearchList'];
		$SearchText = $_GET['search'];
		if($SearchBy == "Id")
		{
			$query = "select * from employee where id = '$SearchText' ";
		}
		else if($SearchBy == "Name")
		{
			$query = "select * from employee where name = '$SearchText' ";
		}
		else if($SearchBy == "Designation")
		{
			$query = "select * from employee where Designation= '$SearchText' ";
		}
		else{
			echo "<script>alert('Please select any field')</script>";
		}

		
	}
    $rows = mysqli_query($con,$query);
    $totalRows = mysqli_num_rows($rows);


if($totalRows != 0)
{
	?>
	<div class="container">
	   <div class="row">
		  <div class="col-md-8 col-md-offset-6">

        <form action="" method="get" class="text-center" style="border:1px solid gray; padding:10px; margin-top:10px;">
           <label for="" style="font-weight:700">SEARCH BY :</label>

		   <select name="SearchList">
			<option value="Select">Select</option>
			<option value="Id">Id</option>
			<option value="Name">Name</option>
			<option value="Designation">Designation</option>
           </select>
		   <input type="text" name="search" required >
		   <input type="submit" value="Search" name="SearchBtn" class="btn btn-success">
		   <a href="view.php" class="btn btn-danger">Reset</a>
        </form>


<table class="table table-bordered table-striped table-condensed" style="text-align: center;">
		<tr>
			<th colspan="7" class="text-center" style="font-size: 20px;">
				Employee Data Table
			</th>
		</tr>
		<tr>
			<th class="text-center">ID</th>
			<th class="text-center">NAME</th>
			<th class="text-center">AGE</th>
			<th class="text-center">DESIGNATION</th>
			<th class="text-center">SALARY</th>
			<th class="text-center">EDIT</th>
			<th class="text-center">DELETE</th>
		</tr>
	

	<?php
	while($data = mysqli_fetch_assoc($rows)){
		
		echo "<tr>
             <td>".$data['id']."</td>
             <td>".$data['name']."</td>
             <td>".$data['age']."</td>
             <td>".$data['designation']."</td>
             <td>".$data['salary']."</td>
             <td><a href='update.php?id=$data[id]'>Edit</a></td>
             <td><a href='delete.php?id=$data[id]'>Delete</a></td>
		</tr>";
	}
}
else{
	echo "Rows not found!!";
}

?>
</table>
</div>
</div>
</div>
</body>
</html>