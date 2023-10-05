<?php

session_start();
 

//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  //  header("location: login.php");
    //exit;
//}
 

require_once "config.php";
 

$username = $new_password = $confirm_password = "";
$username_err=$new_password_err = $confirm_password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
   
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter username.";
    } 
    else
    {
        $username = trim($_POST["username"]);
    }

 
    if(empty(trim($_POST["new_password"])))
    {
        $new_password_err = "Please enter the new password.";     
    }
    elseif(strlen(trim($_POST["new_password"])) < 6)
    {
        $new_password_err = "Password must have atleast 6 characters.";
    } 
    else
    {
        $new_password = trim($_POST["new_password"]);
    }
    

    if(empty(trim($_POST["confirm_password"])))
    {
        $confirm_password_err = "Please confirm the password.";
    } 
    else
    {
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password))
        {
            $confirm_password_err = "Password did not match.";
        }
    }
        
 
    if(empty($username_err) && empty($confirm_password_err))
    {
      
        $sql = "UPDATE users SET password = ? WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql))
        {
          
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_username);
            
 
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_username = $username;
            
           
            if(mysqli_stmt_execute($stmt))
            {
               
                mysqli_stmt_store_result($stmt);
                echo ('stored');
                
       
                session_destroy();
                header("location: login.php");
                exit();
            }
            else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }
            

 
            mysqli_stmt_close($stmt);
        }
    }
    
 
    mysqli_close($link);
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/s.css"/>
    <style>
        body{ font: 14px sans-serif;
        margin:auto; 
        margin-top: 120px;
        width:500px; 
        background-color: blueviolet;
        color: black;
        
        
        }
        .wrapper{  border-style: solid;
        border-color: blue;
        border-radius: 30px;
        padding: 20px;  background-color: white;}
    </style>
</head>
<body>

    <header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167); top: 0;">
			<div class="container">

				<div class="navbar-header">
			
					<div class="navbar-brand">
						<a class="logo" href="main.php" style="padding-bottom: 10px;">Predictly</a>
					</div>
			

				</div>
			</div>
		</header>


    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label><b>Username</b></label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>  
            <div class="form-group">
                <label><b>New Password</b></label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label><b>Password</b></label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="login.php">Cancel</a>
            </div>
        </form>
    </div>    
</body>

</html>


