<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
     <link rel="stylesheet" href="../Mini_project_final/css/menu.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Mini_project_final/css/form.css">
  
    <style>
        .heading{
            z-index: 2;
            color: white;
            text-align: center;
        }
        body{
            background-image: url(888.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 200px;
        }
       
    </style>
</head>

<body>
   <div class="mainmenu">
        <ul>
            <li class="first"><i class="fa fa-eur" aria-hidden="true"></i>
                EVENTZILLA</li>
            <li class="active"><a href="../Mini_project_final/index.php"><i class="fa fa-home" aria-hidden="true"></i>
                    Home</a></li>
            <li><a href="#internal-link"><i class="fa fa-rss" aria-hidden="true"></i>
                    Blog</a></li>
            
            <li><a href="../Mini_project_final/makebooking.php"><i class="fa fa-bed" aria-hidden="true"></i>
                    Booking</a></li>
            <li><a href="../Mini_project_final/login1.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
                    Login</a></li>
            <li><a href="../Mini_project_final/signup1.php"><i class="fa fa-user-plus" aria-hidden="true"></i>
                    Sign Up</a></li>
        </ul>
    </div>
    <h1 class="heading"> Please Enter Details to Login.</h1>
    

    <div class="box">
        <h2>Login</h2>
        <form action="login_new.php" method="post">
            <div class="inputBox">
                <input type="text" name="username" value="username"required>
                <label  for="username">Username</label>
            </div>

            
            <div class="inputBox">
                <input type="password" name="password" value="password" required>
                <label>Password</label>
            </div>
            
            <div>
                <input type="submit" value="Submit">
            </div>

        </form>
    </div>
</body>

</html>
