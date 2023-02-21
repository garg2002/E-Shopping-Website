<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitem=array_column($_SESSION['cart'],'item_name');
            if(in_array($_POST['item_name'],$myitem))
            {
                echo "<script>
                alert('Items Already Inserted');
                window.location.href='product.php';
                </script>";
            }
            else
            {
           $count=count($_SESSION['cart']);
           $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'], 'price'=>$_POST['price'], 'quantity'=>1);
           echo "<script>
           alert('Items Added');
           window.location.href='product.php';
           </script>";
            }
        }
        else
        {
           $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'], 'price'=>$_POST['price'], 'quantity'=>1);
           echo "<script>
           alert('Items Added');
           window.location.href='product.php';
           </script>";
        }
    }
    if(isset($_POST['Remove']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            
            if($value['item_name']==$_POST['item_name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>
                alert('Item Removed');
                window.location.href = ('cart.php');
                </script>";
            }
        }
    }
}
?>