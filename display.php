<?php

$_city = $_POST["city"];
$_category = $_POST["display"];
$name = $_POST['name1'];
$id = $_POST['id1'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>UdhaarPe</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a091645713.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="display.css">
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="Home.php" style="font-size: 50px;" >UdhaarPe</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="cart_view.php">Cart<i class="fas fa-shopping-cart"></i></i></a></li>    
                    &nbsp;&nbsp;
                    <li><b><?php echo $name;?></b><i class="fas fa-user"></i></i></li>

                    </ul>
                </div>
            </nav>
        </div>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "UdhaarPe");
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
         ?>   
        <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
		            <h1 class="page-header"><?php echo $_category; ?></h1>
		       		<?php
		       			
		       			

		       			try{
		       			 	$inc = 3;	
                                $sql = "SELECT id,name,rent,photo FROM products WHERE category = '$_category' && city = '$_city' " ;
                                $result = $conn->query($sql) or die($conn->error);
                                while($row = $result->fetch_assoc()) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
                                   <div class='col-sm-4'>
                                   <div class='box box-solid'>
                                       <div class='box-body prod-body'>
                                           <img src='".$image."' width='200px' height='200px' class='thumbnail'>
                                           <h5><a href='product.php?product=".$row['id']." & name=".$name." & id=".$id."'>".$row['name']."</a></h5>
                                
                                       </div>
                                       <div class='box-footer'>
                                       

                                           <b>Rs.</b><b>".$row['rent']."</b>
                                       </div>
                                   </div>
                               </div>

	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						

		       		?> 
	        	</div>
	        	
                <div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
      
      <?php include 'includes/scripts.php'; ?>
    </body>
</html>