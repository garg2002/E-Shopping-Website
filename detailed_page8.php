<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="style_detail.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
    .header{
    background: radial-gradient(#fff,#82a7b6);
    height:100%;
}
   </style>
</head>
<body>
    
<div class="header">
        <div class="container-fluid">
             <div class="navbar">
             <div class="logo">
             <a href="index.php"><img src="images/logo.png" width="80px"></a>
             </div>
        
         <nav>
             <ul >
                 <li><a href="index.php">Home</a></li>
                 <li><a href="">Category</a>
                    <ul class="drop-down">
                     <li><a href="product.php">Men</a></li>
                     <li><a href="#women">Woman</a></li>
                     <li><a href="#kid">kid</a></li>
                    </ul>
                </li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="account.php">Account</a></li>
                 <li >
         <a href="logout.php">Logout</a>
         </li>
             </ul>
         </nav>
          <div class="c1"><a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a></div> 
         
         </div>


 <!-------single product details---->

 <div class="small-container single-product">
    <div class="row" style="margin-bottom:100px;">
        <div id="col-2">
        <img src="images/wintercap.jpg" width="458px" height="500px" id="ProductImg">



        </div>
        <div class="col-2">
        <form action="manage.php" method="POST">
        <p>Home/Cap</p>
            <h1>Winter cap</h1>
            <h4>150.00 Rs.</h4>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Large</option>
                <option>Medium</option>
                <option>Small</option>
            </select>
            <input type="number" value="1">
            <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
            <input type="hidden" name="item_name" value="Red printed T-Shirt">
             <input type="hidden" name="price" value="300">
 
 </form>
            <h3>Product Details<i class="fa fa-indent"></i></h3>
            
            
            <ul class="bulet">
                   <li> Care Instructions: Machine Wash</li><br>
                   <li>Fit Type: Regular</li><br>
                   <li>Color name: High Risk Red</li><br>
                   <li> Material: Cotton</li><br>
                   <li> Short Sleeves</li><br>
                   <li>Machine Wash</li><br>
                </ul>
        </div>
    </div>
 </div>



 

</div>
<!-----------footer------>
<div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
                 </div>
                <div class="footer-col-2">
                <img src="images/logo.png">
                 <p>Download App for Android and ios mobile phone.</p>
             </div>
             <div class="footer-col-3">
                 <h3>Useful Links</h3>
                 <ul>
                     <li>Coupons</li>
                     <li>Blog Post</li>
                     <li>Return Policy</li>
                     <li>Join Affiliate</li>
                 </ul>
             </div>
             <div class="footer-col-4">
                 <h3>Follow us</h3>
                 <ul>
                     <li>Facebook</li>
                     <li>Twitter</li>
                     <li>Instagram</li>
                     <li>Youtube</li>
                 </ul>
             </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - Easy Tutorials</p>
        </div>

    </div>
    
</body>
</html>