<!DOCTYPE html>
<html>
<head>
	<title>Signup/login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>


		<nav class="navbar navbar-default">
		<div class="container">
                <a class="navbar-brand" href="Home.php" style="font-size: 50px;" >UdhaarPe</a>
                
         </nav>
        
<br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
	
		
          <div class="col-md-6 login-right">
          	<h2>Login!</h2>
          	<form action="validation.php" method="post">
          		<label>Email</label>
          		<input type="email" name="email" class="form-control" required>
          		<label>Password</label>
          		<input type="password" name="password" class="form-control" required>
          		<br>
          		<button type="submit" class="btn btn-primary">Login</button>
          	</form>
          </div>		
	
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>