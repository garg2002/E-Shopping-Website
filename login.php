<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: index.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: index.php");
                            
                        }
                    }

                }

    }
}    


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
    <link rel="stylesheet" href="css/account.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
.navbar{
    display: flex;
    align-items: left;
    padding: 20px;
    margin-left: 0%;
}
nav{
    flex: 1;
    text-align: right;
    padding-top: 20px;
}
ul{
    list-style: none;
}
ul li{
    display: inline-block;
    position: relative;
}
ul li a{
    display: block;
    padding: 20px 25px;
    text-decoration: none;
    text-align: center;
    font-size: 20px;
   
}
#login{
    display: block;
    padding: 20px 25px;
    text-decoration: none;
    text-align: center;
    font-size: 20px;
    color:#fff;
    background-color:#000;
}
ul li ul.drop-down li{
    display: block;
    
}
ul li ul.drop-down{
    width: 100%;
    position: absolute;
    z-index: 999;
    display: none;
}

.logo img{
    margin-top: 30px;
    margin-left: 5px;
    border-radius: 100px;
    box-shadow: 10px 10px 10px;
}

a{
    text-decoration: none;
    color: rgb(29, 27, 27);
}
ul li{
    position: relative;
    display: inline-block;
}
p{
    color: rgb(22, 22, 22);
}
.container-fluid{
   width: 90%;
   height:700px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
    
}
.header{
    background: url('images/img_lights.jpg');
    background-size:cover;
    background-repeat:no-repeat;
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
                 <li><a href="login.php">Home</a></li>
                 <li><a href="login.php">Category</a>
                </li>
                 <li><a href="login.php">About</a></li>
                 <li><a href="login.php" id="login">Login</a></li>
                 <li >
        <a href="logout.php">Logout</a>
      </li>
             </ul>
         </nav>
</div>

<div class="center" style=" box-shadow: 10px 10px 15px rgba(0,0,0,1);">
      <h1>Login Form</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="username"required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" value="Login" name="login">
        <div class="signup_link">
          Don't have an account? <a href="account.php">Signup</a>
        </div>
      </form>
    </div>
               
</div>
</div>

    
</body>
</html>
