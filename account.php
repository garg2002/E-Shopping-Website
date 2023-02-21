<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: account.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
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
#register{
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
                 <li><a href="account.php">Home</a></li>
                 <li><a href="account.php">Category</a>
                </li>
                 <li><a href="account.php">About</a></li>
                 <li><a href="account.php" id="register">Register</a></li>
                 <li >
        <a href="logout.php">Logout</a>
      </li>
             </ul>
         </nav>
</div>

<div class="center" style=" box-shadow: 10px 10px 15px rgba(0,0,0,1);">
      <h1>Registeration Form</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="username"required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" name="confirm_password" required>
          <span></span>
          <label>Confirm Password</label>
        </div>
        
        <input type="submit" value="Register" name="login">
        <div class="signup_link">
          Already have an account? <a href="login.php">SignIn</a>
        </div>
      </form>
    </div>
               
</div>
</div>

    
</body>
</html>

