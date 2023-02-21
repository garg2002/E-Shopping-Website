<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: account.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SN Store | Ecommerce Website Design</title>
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
    <div class="header" style="background: radial-gradient rgb(#fff,#47626d);">
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
                     <li><a href="product.php #women">Woman</a></li>
                     <li><a href="product.php #kid">kid</a></li>
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
        <div class="row">
            <div class="col-2">
    <h1>Welcome To Our E-Commerce<br> Shopping Website!</h1>
    <p>Success isn't always about greatness. It's about consistency.
        Consistent<br>hard work gains success. Greatness will come.</p>
    <a href="" class="btn">Explore Now &#8594;</a>
    </div>
        <div class="col-2">
<img src="images/image1.png" alt="" width="600px" height="500px">
        </div>
    </div>
</div>

<!------ featured categories------>
  <div class="categories">
      <div class="small-container">
      <div class="row">
          <div class="col-3">
              <img src="images/category-1.jpg">
          </div>
          <div class="col-3">
              <img src="images/category-2.jpg">
          </div>
          <div class="col-3">
              <img src="images/category-3.jpg">
          </div>
      </div>
    </div>
</div>
<!------ featured products------>
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
           
            <img src="images/gallery-2.jpg"></a>
            <h4>Red printed T-Shirt</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
           
            </div>
            <p>300.00 Rs.</p>
        </div>
        <div class="col-4">
            <img src="images/product-2.jpg">
            <h4>Hrx Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                
            </div>
            <p>500.00 Rs.</p>
    </div>
    <div class="col-4">
        <img src="images/product-3.jpg">
        <h4>Track Pants</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            
        </div>
        <p>750.00 Rs.</p>
</div>
<div class="col-4">
    <img src="images/product-6.jpg">
    <h4>Black Printed T-Shirt</h4>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        
    </div>
    <p>250.00 Rs.</p>
    </div>
    <div class="col-4">
        <img src="images/product-5.jpg"></a>
        <h4>White Shoes</h4></a>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            
        </div>
        <p>350.00 Rs.</p>
    </div>
    <div class="col-4">
        <img src="images/product-4.jpg">
        <h4>Blue T-Shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            
        </div>
        <p>250.00 Rs.</p>
        </div>
        <div class="col-4">
            <img src="images/product-10.jpg">
            <h4>Black Sport Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                
            </div>
            <p>650.00 Rs.</p>
            </div>
            <div class="col-4">
               <img src="images/product-8.jpg"></a>
                <h4> Fossil Watch</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    
                </div>
                <p>350.00 Rs.</p>
                </div>
                <div class="col-4">
                    <img src="images/product-9.jpg">
                    <h4>Timing Watch</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        
                    </div>
                    <p>250.00 Rs.</p>
                    </div>
                    <div class="col-4">
                        <img src="images/product-7.jpg">
                        <h4>HRX Shocks</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            
                        </div>
                        <p>150.00 Rs.</p>
                        </div>
                        <div class="col-4">
                            <img src="images/product-11.jpg">
                            <h4>Normal Shoes</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                
                            </div>
                             <p>250.00 Rs.</p>
                            </div>
                            <div class="col-4">
                                <img src="images/product-12.jpg">
                                <h4>Black Gym Track Pant</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    
                                </div>
                                <p>750.00 Rs.</p>
                                </div>
                            
    
    <!---------------testimonial--------------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Really amazing product, it’s slick & pretty much smooth AI plus a soft band & styles watch faces.
                        3 Month personal coaching help to achieve health goal & help to understand your vital.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            
                        </div>
                        <img src="images/user-3.png">
                        <h3>Pratima Gupta</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Nice product by which we can calculate steps, distance, calories burn and many more.
                         We can see HR, steps, calories graphs on tracker, many exercise mode, sleep capture and we can also sync this info with GOQii app. 
                        </p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            
                        </div>
                        <img src="images/user-1.png">
                        <h3>Sunita Jha</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>T-shirts fits well but looks bit pricy to me... 
                        I bought it as I am going to wear it at home but later I realized Roadstar has better 'Home T-shirt' within 300 range.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            
                        </div>
                        <img src="images/user-2.png">
                        <h3>Atul kumar</h3>
                </div>
            </div>
        </div>
    </div>
<!-------------brands------------>
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png">
            </div>
            <div class="col-5">
                <img src="images/logo-oppo.png">
            </div>
            <div class="col-5">
                <img src="images/logo-coca-cola.png">
            </div>
            <div class="col-5">
                <img src="images/logo-paypal.png">
            </div>
            <div class="col-5">
                <img src="images/logo-philips.png">
            </div>
        </div>
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