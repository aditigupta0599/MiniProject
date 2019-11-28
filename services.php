<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<link rel="stylesheet" href="../Mini_project_final/css/menu.css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/menu.css">
<style>
    /* Font awesome*/
    .text {
        display: flex;

    }




    /*   input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


button:hover {
  background-color: lightgrey;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}  */

    .abc {
        border: 1px solid black;
        margin-top: 100px;
        margin-left: 400px;
        margin-right: 400px;
        padding: 20px;
        background-color: blanchedalmond;
        border-radius: 25px;
        ;

    }

    .div-1 {
        margin: 40px;
        border: 2px solid gray;
        border-radius: 8px;
        height: 280px;
    }

    .div-2 {
        border: 1px solid gray;
        border-radius: 5px;
        margin: 10px;
        height: 130px;
        padding-left: 10px;
        padding-top: 6px;
    }
    .select{
        align-self: right;
    }

</style>

<body>
    <div class="mainmenu">
        <ul>
            <li class="first"><i class="fa fa-eur" aria-hidden="true"></i>
                EVENTZILLA</li>
            <li class="active"><a href="../Mini_project_final/home.php"><i class="fa fa-home" aria-hidden="true"></i>
                    Home</a></li>
            <li><a href="#internal-link"><i class="fa fa-rss" aria-hidden="true"></i>
                    Blog</a></li>
            <li><a href="../Mini_project_final/services.php"><i class="fa fa-stop-circle" aria-hidden="true"></i>
                    Services</a></li>
            <li><a href="../Mini_project_final/index.php"><i class="fa fa-bed" aria-hidden="true"></i>
                    Log Out</a></li>
            <!--<li><a href="../Mini_project_final/login1.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
                    Login</a></li>
            <li><a href="../Mini_project_final/signup1.php"><i class="fa fa-user-plus" aria-hidden="true"></i>
                    Sign Up</a></li>-->
        </ul>
    </div>


    <div class="abc">
        <form action="" method="post">
            <label for="booking">Booking Date</label><br>
            <input type="date" name="booking" required><br><br>
            <label for="city" >City</label><br>
            <select style="width: 50%;" name="city">
                <option>-------</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Lucknow">Lucknow</option>
                <option value="Delhi">Delhi</option>
                <option value="Jaipur">Jaipur</option>
            </select><br><br>
            
            <button style="padding: 10px 20px;">SUBMIT</button>
        </form>
    </div>
    <div class="div-1">
        <header style="padding-left: 30px; height: 35px; background-color: beige; padding-top: 20px; font-size: 15px; color: blue;">Vihaaram Planners</header>
        <hr>
        <div class="div-2">
            <pre style="font-size: 21px; height: 30px;"><b>Cities</b></pre>
            <input type="radio" name="Kolkata">&nbsp;&nbsp;Kolkata<br>
            <pre style="font-size: 21px; height: 30px; padding-top: 5px;"><b>Events</b></pre>
            <input type="radio" name="abc">&nbsp;&nbsp;Corporate Gathering<b> ₹10000</b> &nbsp;
            <input type="radio" name="abc">&nbsp;&nbsp;Festive Parties<b> ₹12000</b>&nbsp;
            <input type="radio" name="abc">&nbsp;&nbsp;Anniversary<b> ₹12000</b> &nbsp;
            <input type="radio" name="abc">&nbsp;&nbsp;Birthday Party<b> ₹10000</b><br><br>
            <!-- <input type="submit"  value="Add To Booking" style="padding: 10px;"><a href="../html/cities.html">Add To Booking</a>-->
            <button style="padding: 10px;"><a href="../Mini_project_final/cities.php" style="text-decoration: none">Add To Booking</a></button>
            <label for="people">No. of people:</label><br>
            <select style="width: 50%;">
                <option>-------</option>
                <option>100</option>
                <option>150</option>
                <option>200</option>
                <option>300</option>
            </select><br><br>

        </div>

    </div>
    <div class="div-1">
        <header style="padding-left: 30px; height: 35px; background-color: beige; padding-top: 20px; font-size: 20px; color: blue;">Cuckoo Events</header>
        <hr>
        <div class="div-2">
            <pre style="font-size: 21px; height: 30px;"><b>Cities</b></pre>
            <input type="radio" name="Lucknow">&nbsp;&nbsp;Lucknow<br>
            <pre style="font-size: 21px; height: 30px; padding-top: 5px;"><b>Events</b></pre>
            <input type="radio" name="abc">&nbsp;&nbsp;Corporate Gathering<b> ₹15000</b> &nbsp;
            <input type="radio" name="abc">&nbsp;&nbsp;Festive Parties<b> ₹13500</b>&nbsp;

            <!--  <input type="radio" name="Delhi">&nbsp;&nbsp;Birthday Party<b> ₹2500</b><br><br> -->
            <button style="padding: 10px;"><a href="../Mini_project_final/cities.php" style="text-decoration: none">Add To Booking</a></button>
            <label for="people">No. of people:</label><br>
            <select style="width: 50%;">
                <option>-------</option>
                <option>100</option>
                <option>150</option>
                <option>200</option>
                <option>300</option>
            </select><br><br>

        </div>

    </div>
    <div class="div-1">
        <header style="padding-left: 30px; height: 35px; background-color: beige; padding-top: 20px; font-size: 20px; color: blue;">Vihaaram Planners</header>
        <hr>
        <div class="div-2">
            <pre style="font-size: 21px; height: 30px;"><b>Cities</b></pre>
            <input type="radio" name="Delhi">&nbsp;&nbsp;Delhi<br>&nbsp;&nbsp;&nbsp;&nbsp;
            <pre style="font-size: 21px; height: 30px; padding-top: 5px;"><b>Events</b></pre>
            <input type="radio" name="abc">&nbsp;&nbsp;Corporate Gathering<b> ₹15000</b> &nbsp;
            <input type="radio" name="abc">&nbsp;&nbsp;Festive Parties<b> ₹13500</b>&nbsp;

            <input type="radio" name="abc">&nbsp;&nbsp;Birthday Party<b> ₹12500</b><br><br>
            <!-- <input type="submit" value="Add to Booking" style="padding: 10px;" onclick="../html/cities">-->
            <!-- <button type="submit" style="padding: 5px; position: absolute; top: 530px;">ADD TO BOOKING</button>-->
            <button style="padding: 10px;"><a href="../Mini_project_final/cities.php" style="text-decoration: none">Add To Booking</a></button>
            <label for="people">No. of people:</label><br>
            <select style="width: 50%;">
                <option>-------</option>
                <option>100</option>
                <option>150</option>
                <option>200</option>
                <option>300</option>
            </select><br><br>

        </div>

    </div>
    <div class="div-1">
        <header style="padding-left: 30px; height: 35px; background-color: beige; padding-top: 20px; font-size: 20px; color: blue;">Cuckoo Events</header>
        <hr>
        <div class="div-2">
            <pre style="font-size: 21px; height: 30px;"><b>Cities</b></pre>
            <input type="radio" name="Jaipur">&nbsp;&nbsp;Jaipur<br><br>
             <label for="people">No. of people:</label><br>
             <div class="select">
            <select style="width: 50%;">
                <option>-------</option>
                <option>100</option>
                <option>150</option>
                <option>200</option>
                <option>300</option>
            </select>
            </div>
            <pre style="font-size: 21px; height: 30px; padding-top: 5px;"><b>Events</b></pre>
            <input type="radio" name="abc">&nbsp;&nbsp;Corporate Gathering<b> ₹12000</b> &nbsp;
            <input type="radio" name="abc">&nbsp;&nbsp;Festive Parties<b> ₹13500</b>&nbsp;
            <input type="radio" name="abc">&nbsp;&nbsp;Anniversary<b> ₹12500</b>&nbsp;
            <input type="radio" name="abc">&nbsp;&nbsp;Birthday Party<b> ₹11500</b><br><br>
            <!--<input type="submit" value="Add to Booking" style="padding: 10px;">-->
            <!-- <button type="submit" style="padding: 5px; position: absolute; top: 530px;">ADD TO BOOKING</button>-->
            <button style="padding: 10px; "><a href="../Mini_project_final/cities.php" style="text-decoration: none" ;>Add To Booking</a></button>
        

        </div>

    </div>


</body>

</html>
