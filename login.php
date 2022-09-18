<?php
session_start();
     include("connection.php");
     include("functions.php");

    if($_SERVER['REQUEST_METHOD'] =="POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
        
            $query ="select * from login where user_name = '$user_name' limit 1";

            $result = mysqli_query($con,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
        		{

			     $user_data = mysqli_fetch_assoc($result);
			    
                    if($user_data['password'] === $password)
                    {
                      $_SESSION['user_id'] = $user_data['user_id'];
                      header("Location: DashboardJR.php");
                      die;
                    } 
        		}
            }
            echo "Invalid Credentials";
        }else
        {
            echo "Invalid Credentials";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="base.css">
	<title>Signup</title>
	
</head>
<body>
<form method="post">
<div class="card mb-2" style="max-width:1230px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://png.pngtree.com/png-vector/20191003/ourlarge/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1786166.jpg" class="img-fluid rounded-start" alt="login pic">
              </div>
              
              <div class="col-md-8">
              <div class="card-header" style="background-color:turquoise;">
                <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="signup.php">Signup</a></li>
    <li class="breadcrumb-item"><a href="login.php">Login</a></li>
  </ol>
                <div class="card-body" style="background-color:peachpuff;">
                  <h5 class="card-title">Login</h5>
                  <hr width="70px" size="7px">
                  <p class="card-text">Username</p>
                  <input id="text" class="form-control" type="text" name="user_name">
                  <p class="card-text">Password</p>
                  <input id="text" class="form-control" type="password" name="password">
                
                  <a><input id="button" type="submit" value="login"></a>
                  <hr size="4px">
                 

                </div>
              </div>
            </div>
          </div>
    </form>
</body>
</html> 
