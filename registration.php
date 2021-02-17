<?php

  session_start();
 
  //header('location:userregister.php');

  $con = mysqli_connect('localhost','root','','UdhaarPe');

 

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $phone = $_POST['phone'];
  $add = $_POST['address'];
  
  

  function alert_1($mes)
    {
      echo "<script>alert('$mes');</script>";
    }

  $s = "Select * from users where email = '$email' ";
  $result = mysqli_query($con,$s);
  $num=mysqli_num_rows($result);

  if($num == 1)
  {
     alert_1("email already exists!");
  }
  
  else
  {
  	$reg=" insert into users (email, password, first_name, last_name, address, contact) values ('$email' , '$pass' , '$fname', '$lname', '$add', '$phone')";
  	
  	mysqli_query($con , $reg);
    alert_1("Registration successfull!!");
    header('login.php');
  }
?>