<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4" style="-webkit-box-shadow: -2px 1px 18px 2px rgba(0,0,0,0.75);
            -moz-box-shadow: -2px 1px 18px 2px rgba(0,0,0,0.75);box-shadow: -2px 1px 18px 2px rgba(0,0,0,0.75); margin-top:50px; padding:20px;border-radius:10px;">
				
	           <form action="insert.php" method="post">
				<div>
					<h1 class="well text-center">Insert Data</h1>
                </div>
		       
		         <input class="form-control" type="text" name="name" placeholder="Enter your name" required>
                  <br>
		        
		         <input class="form-control" type="text" name="age" placeholder="Enter your age" required>
				 <br>
		         
		         <input class="form-control" type="text" name="designation" placeholder="Enter your designation" required>
                 <br>
		        
		         <input class="form-control" type="text" name="salary" placeholder="Enter your salary" required>
                 <br>
		         <input type="submit" name="SubmitBtn" value="Insert" class="btn btn-info btn-block">
                </form>
            </div>
        </div>
    </div>



</body>
</html>