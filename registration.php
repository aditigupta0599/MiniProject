<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<link rel="stylesheet" href="../Mini_project_final/css/menu.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: black;
    }

    * {
        box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password],
    input[type=tel],
    input[type=url] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }

</style>
<div class="mainmenu">
    <ul>
        <li class="first"><i class="fa fa-eur" aria-hidden="true"></i>
            EVENTZILLA</li>
        <li class="active"><a href="../Mini_project_final/home.php"><i class="fa fa-home" aria-hidden="true"></i>
                Home</a></li>
        <li><a href="#internal-link"><i class="fa fa-rss" aria-hidden="true"></i>
                Blog</a></li>
       <!-- <li><a href="../Mini_project_final/services.php"><i class="fa fa-stop-circle" aria-hidden="true"></i>
                Services</a></li>-->
        <li><a href="../Mini_project_final/book.php"><i class="fa fa-bed" aria-hidden="true"></i>
                Book Now</a></li>
        <li><a href="../Mini_project_final/login1.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
                Log out</a></li>
        <!--<li><a href="../Mini_project_final/signup1.php"><i class="fa fa-user-plus" aria-hidden="true"></i>
                Sign Up</a></li>-->
    </ul>
</div>



<body>
    <form action="registration1.php" method="post">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account and to book our services.</p>
            <hr>

            <label for="uname">Name</label>
            <input type="text" placeholder="username" name="uname" required>

            <label for="emails"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="emails" required>

            <label for="num"><b>Contact Number</b></label>
            <input type="tel" placeholder="Enter phone number" name="num" required><br><br>

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" required><br>
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <input type="submit" style="padding:10px;" type="submit" name="create" value="Register" >


           
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    </form>


</body>

</html>
