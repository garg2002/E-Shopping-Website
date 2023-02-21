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
   <link rel="stylesheet" href="style.css">
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
</div>

<!------ cart items --- -->

<div class="cart-page col-lg-12">
    <div class="row" style="border:1px solid; background-color:skyblue; padding: 5px; width:100%;">
     
            <center><h1>My Cart</h1><br></center>

    </div>

  <table style="border:1px solid">
  <div class="col-lg-9">
    <tr>
        <th>Serial_no</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th></th>
      
    </tr>
  </div>
    <?php
    
    if(isset($_SESSION['cart']))
    {
       
   
       foreach($_SESSION['cart'] as $key => $value)
         {
            $sr=$key+1;
           
            echo"
            <tr>
              <td>$sr</td>
              <td>$value[item_name]</td>
              <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
              <td>
              <form action='manage.php' method='POST'>
              <input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[quantity]' min='1' max='10'>
              </td>
              <td class='itotal'></td>
              <td>
              <form action='manage.php' method='POST'>
              <button name='Remove'  class='btn btn-primary'>Remove</button>
              <input type='hidden' name='item_name' value='$value[item_name]'>
              </form>
              </td>
            </tr>
            ";
         }
    }
    ?>
    
   </table>

    <div class="totalbtn">  
      <u><h3>Grand Total</h3></u><br>
      <h4 class="text-right" id="gtotal"></h4>
      <a href="order.php"><input type="button" value="Buy" id="buy"></a>
      <br>
    </div>
</div>




             <script>
                   
                   var gt=0;
                   var iprice = document.getElementsByClassName('iprice');
                   var iquantity = document.getElementsByClassName('iquantity');
                   var itotal = document.getElementsByClassName('itotal');
                   var gtotal = document.getElementById('gtotal');

                   function subTotal()
                   {
                       gt=0;
                       for(i=0;i<iprice.length;i++)
                       {
                           itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                           gt=gt+(iprice[i].value)*(iquantity[i].value);

                       }
                       gtotal.innerText=gt;
                   }

                   subTotal();
               </script>

  

</body>
</html>