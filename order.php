<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SN Store | Ecommerce Website Design</title>
   <link rel="stylesheet" href="css/order.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
    .header{
    background: radial-gradient(#fff,#82a7b6);
    height:100%;
}
   </style>
</head>
<body style="background: radial-gradient(#fff,#82a7b6);">
    <div class="header">
        <div class="container-fluid">
            <div class="navbar">
             <div class="logo"><a href="index.php"><img src="images/logo.png" width="80px"></a></div>
            <nav>
             <ul >
                 <li><a href="index.php">Home</a></li>
                 <li><a href="">Category</a>
                    <ul class="drop-down">
                     <li><a href="product.php">Men</a></li>
                     <li><a href="product.php #women">Woman</a></li>
                     <li><a href="product.php #kid">kid</a></li>
                    </ul>
                </li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="account.php">Account</a></li>
                 <li ><a href="logout.php">Logout</a></li>
             </ul>
            </nav>
             <div class="c1"><a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a></div>  
            </div>
            
<?php 
  if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
  { 
?>
<form class="formnew" action="purchase.php" method="POST">
  
  <div class="form-group">
         <table>
            <tr>
                <th colspan='2'><h2>Customer Details<hr></h2></th>
            </tr>
        
            <tr>
                <th>Full Name</th>
                <td><input type="text" name="full_name" class="form-control" required></td>
            </tr>
            <tr>
                <th>Phone No.</th>
                <td><input type="text"  name="phone_no"class="form-control" required></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><textarea name="address" id="" cols="30" rows="3"></textarea></td>
            </tr>
            <tr>
                <th>Payment Mode</th>
                <td><input type="radio" name="pay_mode" value="COD" class="form-check-input" id="exampleCheck1">Cash On Delivery<br>
                <input type="radio" name="pay_mode" value="UPI_Payment" class="form-check-input" id="exampleCheck1">Paytm/GPay/PhonePay<br>
                <input type="radio" name="pay_mode" value="Card" class="form-check-input" id="exampleCheck1">Credit/Debit Card</td>
            </tr>
            <tr>
                <td colspan='2'><button type="submit" class="btn btn-primary" name="purchase" >Order now</button></td>
            </tr>
         </table>
  </div>
</form>
<?php 
  }
?>
        </div>
    </div>
</body>
</html>
