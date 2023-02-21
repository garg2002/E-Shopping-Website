<?php
session_start();

$conn = new mysqli("localhost", "root", "", "testing");


if(mysqli_connect_error())
{
    echo "<script>
    alert('database not connected');
    window.location.href ='cart.php'
     </script>";
     exit();
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
       $query1 = "INSERT INTO `order_manager`(`Full_Name`,`Phone_No.`,`Address`,`Pay_Mode`) VALUES('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
       if(mysqli_query($conn,$query1))
       {
         $Order_Id=mysqli_insert_id($conn);
         $query2 ="INSERT INTO `user_orders`(`Order_Id`, `Product_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
         $nav=mysqli_prepare($conn,$query2);
         if($nav)
         {
             mysqli_stmt_bind_param($nav,"isii",$Order_Id,$Product_Name,$Price,$Quantity);
             foreach($_SESSION['cart'] as $key => $values)
             {
                 $Product_Name=$values['item_name'];
                 $Price=$values['price'];
                 $Quantity=$values['quantity'];
                 mysqli_stmt_execute($nav);
             }
             unset($_SESSION['cart']);
             echo"<script>
             alert('order placed');
             window.location.href='index.php';
             </script>";
         }
        else
          {
            echo "<script>
            alert('SQL query prepare error');
            window.location.href='cart.php';
            </script>";
          }
         
      }
       else
      {
           echo "<script>
           alert('SQL error');
           window.location.href='cart.php';
           </script>";
      }
    }
}