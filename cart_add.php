<?php
            $conn = mysqli_connect("localhost", "root", "", "UdhaarPe");
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
         ?>  
<?php
	
    
	$conn = $pdo->open();

	$output = array('error'=>false);

	$id = $_POST['id'];
	$quantity = $_POST['quantity'];

	if(isset($_SESSION['user'])){
		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM cart WHERE user_id=:user_id AND product_id=:product_id");
		$stmt->execute(['user_id'=>$user['id'], 'product_id'=>$id]);
		$row = $stmt->fetch();
		if($row['numrows'] < 1){
			try{
				$stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
				$stmt->execute(['user_id'=>$user['id'], 'product_id'=>$id, 'quantity'=>$quantity]);
				$output['message'] = 'Item added to cart';
				
			}
			catch(PDOException $e){
				$output['error'] = true;
				$output['message'] = $e->getMessage();
			}
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Product already in cart';
		}
	}
	else{
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array();
		}

		$exist = array();

		foreach($_SESSION['cart'] as $row){
			array_push($exist, $row['productid']);
		}

		if(in_array($id, $exist)){
			$output['error'] = true;
			$output['message'] = 'Product already in cart';
		}
		else{
			$data['productid'] = $id;
			$data['quantity'] = $quantity;

			if(array_push($_SESSION['cart'], $data)){
				$output['message'] = 'Item added to cart';
			}
			else{
				$output['error'] = true;
				$output['message'] = 'Cannot add item to cart';
			}
		}

	}

	$pdo->close();
	echo json_encode($output);

?>
<html>
    <head>
        <title>Udhaarpe</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a091645713.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
      <form method="POST" action="display.php">  
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="Home.php" style="font-size: 50px;" >UdhaarPe</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        
                        <select class="form-control" id="city" name="city" required>
                            <option selected>Choose your city</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Kolkata">Kolkata</option>
                            <option value="Chennai">Chennai</option>
                        </select>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="cart_view.php">Cart<i class="fas fa-shopping-cart"></i></i></a></li>    
                    &nbsp;&nbsp;
                    <li><b><?php echo $name;?></b><i class="fas fa-user"></i></i></li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <div class="container-fluid">
            <div class="jumbotron">
                <h1 class="display-4">Hello, there!</h1>
                <p class="lead">Spent a lot of money on stuff that you rarely use now?</p>
                <hr class="my-1">
                <p>Rent them while you don't need them.</p>
                <a class="btn btn-primary btn-lg" href="rent.php" role="button">Click here.</a>
              </div>
        </div>
       
        <div class="container-fluid" style="text-align: center;">
            <h2>Categories</h2>
            <hr class="my-4" style="width: 50%;">
            <div class="card-deck" id="deck1">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                    <button name="display" type="submit" value="Books" >Books</a>
                 </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://c1.wallpaperflare.com/preview/501/818/436/photography-gear-equipment-camera.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <button name="display" type="submit" value="Camera And Accessories" >Camera And Accessories</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://st2.depositphotos.com/1001877/6374/i/450/depositphotos_63745311-stock-photo-home-appliances-gas-cooker-tv.jpg"" class="card-img-top" alt="...">
                    <div class="card-body">
                    <button name="display" type="submit" value="Electronic Appliances" >Electronic Appliances</a>
                    </div>
                </div>
            </div>
            <div class="card-deck" id="deck2">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1538688525198-9b88f6f53126?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                    <button name="display" type="submit" value="Furniture" >Furniture</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://specials-images.forbesimg.com/imageserve/458259491/960x0.jpg?fit=scale" class="card-img-top" alt="...">
                    <div class="card-body">
                    <button name="display" type="submit" value="Gaming" >Gaming</a>
                  </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://thumbs.dreamstime.com/b/assorted-sports-equipment-black-11153245.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <button name="display" type="submit" value="Sports Equipments">Sports Equipments</a>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer">
            <div class="container-fluid">
        
              <i class="footer-image fab fa-twitter fa-2x"></i>
              <i class="footer-image fab fa-facebook-f fa-2x"></i>
              <i class="footer-image fab fa-instagram fa-2x"></i>
              <i class="footer-image fas fa-envelope fa-2x"></i>
              <p class="copyright"><strong>Copyright 2020 UdhaarPe</strong></p>
            </div>
          </footer>
          <input type="hidden" name="name1" 
            value="<?php echo $name; ?>">
            <input type="hidden" name="id1" 
             value="<?php echo $id; ?>">


         </form>
    </body>
    </html>