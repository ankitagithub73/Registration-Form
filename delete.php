<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Delete page</title>
</head>
<body>
    <?php
       include('dbconnection.php');
       $id = $_GET['id']??"";

       $query = "delete from employee where id= '$id' ";
       $row = mysqli_query($con, $query);
       if($row)
       {
        
        echo"<script>alert('Data Deleted !!');
        window.location.href='view.php';
        </script>";
       }
       else{
        
        echo"<script>alert('Data Not Deleted !!')</script>";
       }
    ?>
</body>
</html>