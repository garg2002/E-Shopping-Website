<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
   <link rel="stylesheet" href="style.css">
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
             </ul>
         </nav>
     <div class="c1"><a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a></div>  
     
    </div> 
</div>

<!---men--->
<section id="men">
        <h1 class="heading">Men</h1>
        <div class="row">
 
          <div class="col-4">
         <form action="manage.php" method="POST">
             <a href="detailed_page.php"><img src="images/gallery-2.jpg">
            <h4>Red printed T-Shirt</h4></a>
             <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>    
             </div>
             <p>300.00 Rs.</p>
             <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
             <input type="hidden" name="item_name" value="Red printed T-Shirt">
             <input type="hidden" name="price" value="300">
 
 </form>
 </div>     
         <div class="col-4">
 <form action="manage.php" method="POST">
 <a href="detailed_page1.php">      
             <img src="images/product-2.jpg">
             <h4>Hrx Shoes</h4></a>
             <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                 
             </div>
             <p>500.00 Rs.</p>
             <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
             <input type="hidden" name="item_name" value="Hrx Shoes">
             <input type="hidden" name="price" value="500">
     
 </form>
 </div>
 
     <div class="col-4">
  <form action="manage.php" method="POST">
         <a href="detailed_page2.php"><img src="images/product-3.jpg">
         <h4>Track Pants</h4></a>
         <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-o"></i>
             
         </div>
         <p>750.00 Rs.</p>
         <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
         <input type="hidden" name="item_name" value="Track Pants">
             <input type="hidden" name="price" value="750">
          
 </form>
 </div>
</section>

<!----Women--->

<section id="women">
<h1 class="heading">Women</h1>
        <div class="row">
 
          <div class="col-4">
         <form action="manage.php" method="POST">
             <a href="detailed_page3.php"><img src="images/saree1.jpg" id="saree">
            <h4>Silk Saree</h4></a>
             <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>    
             </div>
             <p>500.00 Rs.</p>
             <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
             <input type="hidden" name="item_name" value="Silk Saree">
             <input type="hidden" name="price" value="500">
 
 </form>
 </div>     
         <div class="col-4">
 <form action="manage.php" method="POST">      
             <a href="detailed_page4.php"><img src="images/kurta1.jpg">
             <h4>Shawl</h4></a>
             <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                 
             </div>
             <p>200.00 Rs.</p>
             <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
             <input type="hidden" name="item_name" value="Shawl">
             <input type="hidden" name="price" value="200">
     
 </form>
 </div>
 
     <div class="col-4">
  <form action="manage.php" method="POST">
         <a href="detailed_page5.php"><img src="images/jacket1.jpg">
         <h4>Winter jacket</h4></a>
         <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-o"></i>
             
         </div>
         <p>750.00 Rs.</p>
         <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
         <input type="hidden" name="item_name" value="Winter jacket">
             <input type="hidden" name="price" value="750">
          
 </form>
 </div>

</section>
<!------Kid--->
<section id="kid">
<h1 class="heading">Kids</h1>
        <div class="row">
 
          <div class="col-4">
         <form action="manage.php" method="POST">
            <a href="detailed_page6.php"> <img src="images/kid1.webp" id="kid1">
            <h4>Kids Hoodie</h4></a>
             <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>    
             </div>
             <p>1000.00 Rs.</p>
             <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
             <input type="hidden" name="item_name" value="Kids HoodieRed printed T-Shirt">
             <input type="hidden" name="price" value="1000">
 
 </form>
 </div>     
         <div class="col-4">
 <form action="manage.php" method="POST">      
             <a href="detailed_page7.php"><img src="images/shirtkid.jpg">
             <h4>Shirt</h4></a>
             <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half-o"></i>
                 
             </div>
             <p>500.00 Rs.</p>
             <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
             <input type="hidden" name="item_name" value="Shirt">
             <input type="hidden" name="price" value="500">
     
 </form>
 </div>
 
     <div class="col-4">
  <form action="manage.php" method="POST">
        <a href="detailed_page8.php"> <img src="images/wintercap.jpg">
         <h4>Winter Cap</h4></a>
         <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-o"></i>
             
         </div>
         <p>150.00 Rs.</p>
         <button type="submit"  class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
         <input type="hidden" name="item_name" value="Winter Cap">
             <input type="hidden" name="price" value="150">
          
 </form>
 </div>
</section>
</div>

<!-----------footer------>
               <div class="footer">
                   <div class="container">
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