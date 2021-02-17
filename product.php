<?php
            $conn = mysqli_connect("localhost", "root", "", "UdhaarPe");
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
         ?>  
<?php
	

	$slug = $_GET['product'];
	$name = $_GET['name'];
	$id = $_GET['id'];

	try{
		 		
	    $sql = "SELECT id,name,rent,photo,category FROM products WHERE id='$slug' " ;
                                $result = $conn->query($sql) or die($conn->error);
                                $row = $result->fetch_assoc();
		
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	

?>
<html>
	<head>
		<title>UdhaarPe</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a091645713.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="product.css" />
        <script src="product.js"></script>
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
					<li><a href="cart_view .php">Cart<i class="fas fa-shopping-cart"></i></i></a></li>    
                    &nbsp;&nbsp;
                    <li><b><?php echo $name;?></b><i class="fas fa-user"></i></i></li>

                    </ul>
                </div>
            </nav>
		</div>
		<div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<div class="callout" id="callout" style="display:none">
	        			<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
	        			<span class="message"></span>
	        		</div>
		            <div class="row">
		            	<div class="col-sm-6">
		            		<img src="<?php echo (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg'; ?>" width="100%" class="zoom" data-magnify-src="images/large-<?php echo $product['photo']; ?>">
		            		<br><br>
		            		<form class="form-inline"  method="POST" action="checkout.php">
		            			<div class="form-group">
			            			<div class="input-group col-sm-5">
									<label ><b>No. Of Days</b></label>
									<div class="quantity buttons_added">
	                                  <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                                   </div>
			            			</div>
									
			            			<button  type="submit" class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
								</div>
								<input type="hidden" name="use_name" 
									value="<?php echo $name; ?>">
									<input type="hidden" name="user_d" 
									value="<?php echo $id; ?>">
									<input type="hidden" name="product_id" 
									value="<?php echo $slug; ?>">
		            		</form>
		            	</div>
		            	<div class="col-sm-6">
		            		<h1 class="page-header"><?php echo $row['name']; ?></h1>
		            		<h3><b>Rs.</b><b> <?php echo $row['rent']; ?></b></h3>
		            		<p><b>Category:</b> <?php echo $row['category']; ?></p>
		            		
		            	</div>
		            </div>
		            
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  	
  
</div>

<?php include 'includes/scripts.php'; ?>


</script>
	</body>
</html>