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
    
    body{
        background-image: url("777.jpg");
        background-size: cover;
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
                    Book</a></li>
            <li><a href="../Mini_project_final/login1.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
                    Login</a></li>
            <li><a href="../Mini_project_final/signup1.php"><i class="fa fa-user-plus" aria-hidden="true"></i>
                    Sign Up</a></li>
        </ul>
    </div>
    <div>

    </div>

    <div class="box">
        <h2>Signup</h2>
        <form action="signup.php" method="post">
            <div class="inputBox">
                <input type="text" name="username" required>
                <label for="username">Name</label>
            </div>

            <div class="inputBox">
                <input type="text" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="inputBox">
                <input type="password" name="repassword" required>
                <label for="repassword">Confirm Password</label>
            </div>
            <div>
                <input type="submit" name="create" value="Sign Up">
            </div>

        </form>
    </div>


</body>


</html>
