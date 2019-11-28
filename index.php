
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--   <script src="one.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/homeimg.css">
     <link rel="stylesheet" type="text/css" href="../css/slider.css"> -->
    <script src="one.js"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;

        }

        body {
            background-color: white;

        }

        /*Menu started*/

        .mainmenu {
            background-color: gainsboro;
            text-align: center;
            box-sizing: border-box;

        }

        .mainmenu ul {
            list-style: none;
            display: inline-flex;
        }

        .mainmenu ul li {
            margin: 15px;
            padding: 20px;
            font-size: 20px;

        }

        .mainmenu ul li a {
            text-decoration: none;
            color: grey;
        }

        .mainmenu .first ul li {
            color: red;
            background-color: darkblue;
        }

        .first {
            background-color: black;
            border-radius: 50%;

        }

        .col1 .display {
            text-align: center;
            font-size: 60px;
            margin: 50px;
        }

        /*Menu finish*/
        
        
        
        /* Font awesome*/
        .text{
            display: flex;
            
        }
        
        /*Text on image*/
        .w3-content w3-section{
        position: relative;
        display: inline-block; /* Make the width of box same as image */
        }
        .w3-content w3-section .text{
        position: absolute;
  
        margin: 0 auto;
        left: 0;
        right: 0;        
        text-align: center;
        top: 40%; /* Adjust this value to move the positioned div up and down */
        background: rgba(0, 0, 0, 0.8);
        font-family: Arial,sans-serif;
        color: #fff;
        width: 60%; /* Set the width of the positioned div */
    }        
        /* text on image finish*/
        
        
        /*Button on images*/
        .btn-group button {
  background-color: transparent; /* Green background */
  border: 1px solid black; /* Green border */
  border-radius: 20px;
  color: black; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: lightpink;
}
/*button finish*/

        /* section {

            float: left;
            background-color: white;

        }

        aside {

            float: right;
            background-color: white;
        }*/

        /* cardview */
        .cardview {
            width: 100%;
            height: 60%;
            display: flex;

        }

        .card-1 {
            width: 30%;
            margin: 2%;
            border: 1px solid grey;
            padding: 2px;
            box-sizing: border-box;


        }

        .card-1:hover {
            transform: scaleZ(90deg);
            box-shadow: 0 8px 26px blue;
        }


        .btn {
            padding: 10px;
            margin: 15px 5px;
            border-radius: 5px;
            font-family: cursive;
            font-size: 15px;


        }

        .btn:hover {
            cursor: pointer;
            color: darkcyan;

        }



        /*  .card-1{
            box-shadow: 0 4px 8px0 rgba(0,0,0,0.2);
            transition: 2s;;
            width: 40%;
            border-radius: 5px;
            float:left;
            margin:20px;
            box-shadow: 0px 0px 6px grey;
            text-align: center;
        }
        
        
        .card-2{
            box-shadow: 0 4px 8px0 rgba(0,0,0,0.2);
            transition: 2s;
            width: 40%;
            border-radius: 5px;
            float:left;
            margin:20px;
            box-shadow: 0px 0px 6px grey;
            text-align: center;
        }
        
        .card-3{
            box-shadow: 0 4px 8px0 rgba(0,0,0,0.2);
            transition: 2s;
            width: 40%;
            border-radius: 5px;
            float:left;
            margin:20px;
            box-shadow: 0px 0px 6px grey;
            text-align: center;
        }
        
        .card-1:hover{
            box-shadow: 0 8px 26px blue;
            transform: scaleZ(90deg);
        }
*/
        img {
            border-radius: 5px;
        }

        .container {
            padding: 2px 16px;
            font-size: 20px;
        }







        /*Two column separator*/
        .div1 {
            width: 100%;
            height: 90%;

        }

        .div2 {
            width: 45%;
            height: 60%;
            margin: 2%;
        }

        .div3 {
            width: 45%;
            height: 60%;
            position: relative;
            bottom: 60%;
            left: 50%;
            margin-right: 5%;

        }



        /*Footer*/

        .footer {

            background-color: #3f3f3f;
            color: #d5d5d5;
            display: block;
        }

        .inner-footer {
            width: 100%;
            margin: auto;
            padding: 30px 10px;
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
            justify-content: center;
        }

        .footer-items {
            width: 25%;
            box-sizing: border-box;

        }

        h2 {
            padding: 10px 0px;
            font-size: 16px;
            color: grey;

        }

        ul {
            list-style: none;
            color: lightcyan;
            font-size: 15px;
            letter-spacing: .5px;

        }

        ul li {
            margin-right: 10px 0;
            height: 25px;


        }



        .social-media i {
            height: 15px;
            width: 15px;
            margin: 0px 5px;
            padding: 10px;
            color: #fff;
            border-radius: 50%;
            border: 1px solid grey;
            transition: .3s;
        }

        .social-media i:hover {
            background: grey;
        }

        .footer-bottom {
            padding: 10px;

        }

        @media screen and (max-width=1085px) {
            .footer-items {
                width: 50%;

            }
        }

        @media screen and (max-width=600px) {
            .footer-items {
                width: 100%;

            }
        }

    </style>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
</head>

<body>
  
    <div class="mainmenu">
        <ul>
            <li class="first"><i class="fa fa-eur" aria-hidden="true"></i>
                EVENTZILLA</li>
            <li class="active"><a href="../Mini_project_final/index.php"><i class="fa fa-home" aria-hidden="true"></i>
                    Home</a></li>
            <li><a href="../Mini_project_final/blog.php"><i class="fa fa-rss" aria-hidden="true"></i>
                    Blog</a></li>
            
            <li><a href="../Mini_project_final/makebooking.php"><i class="fa fa-bed" aria-hidden="true"></i>
                    Booking</a></li>
            <li><a href="../Mini_project_final/login1.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
                    Login</a></li>
            <li><a href="../Mini_project_final/signup1.php"><i class="fa fa-user-plus" aria-hidden="true"></i>
                    Sign Up</a></li>
        </ul>
    </div>

   <!-- <img name="slide" width="100%" height="100%"> -->

<!-- image slider -->

    <div class="w3-content w3-section" style="position: relative;">
        <img class="mySlides" src="../Mini_project_final/images/img1.jpg" style="width:100%">
        <img class="mySlides" src="../Mini_project_final/images/img2.jpg" style="width:100%">
        <img class="mySlides" src="../Mini_project_final/images/img3.jpg" style="width:100%">
        <h2 style="font-size: 30px;font-family: sans-serif;margin: 10px;">An online service that allows individuals and organisations to search,analyse & book every aspect of event management.</h2>
         <div class="text" style="position: absolute; top: 90px; left:430px; ">
        <h1 style="font-family: sans-serif;font-size: 80px;">EVENTZILLA</h1><br>
        <br>
              <div class="btn-group" style="position: absolute;top: 120px;left: 120px;" ><button>View Demo</button><button>Get Started</button></div>
        
    </div>

    </div>
    
  <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


    <!-- silder-->
    <!--   <div class="container">

        <input type="radio" id="id1" name="images" checked>
        <input type="radio" id="id2" name="images">
        <input type="radio" id="id3" name="images">
    


        <div class="img_slide " id="one">
            <img src="../images/img1.jpg" alt="">
            <label for="id5" class="prev">
                <i class="fa fa-caret-left"></i>
            </label>
            <label for="id2" class="next">
                <i class="fa fa-caret-right"></i>
            </label>
        </div>

        <div class="img_slide " id="two">
            <img src="../images/img2.jpg" alt="">
            <label for="id1" class="prev">
                <i class="fa fa-caret-left"></i>
            </label>
            <label for="id3" class="next">
                <i class="fa fa-caret-right"></i>

            </label>
        </div>
        <div class="img_slide " id="three">
            <img src="../images/img3.jpg" alt="">
            <label for="id2" class="prev">
                <i class="fa fa-caret-left"></i>
            </label>
            <label for="id4" class="next">
                <i class="fa fa-caret-right"></i>

            </label> </div>
       
        <div class="nav-slider">
            <label for="id1" class="dots" id="dot-1"></label>
            <label for="id2" class="dots" id="dot-2"></label>
            <label for="id3" class="dots" id="dot-3"></label>
           
        </div>


    </div>










    
    <!--<div class="container">
        <div class="img_slide">
            <img src="../images/img1.jpg" alt="image not found">

        </div>
        <div class="img_slide">
            <img src="../images/img2.jpg" alt="image not found">

        </div>
        <div class="img_slide">
            <img src="../images/img3.jpg" alt="image not found">

        </div>




        <input type="radio" id="id1" name="images" checked>
        <input type="radio" id="id2" name="images">
        <input type="radio" id="id3" name="images">


    </div>


    <!--<div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src='../images/img1.jpg'>
                <div class="carousel-caption">
                    <h1 class="display-2">PlanninGurus</h1>
                    <h3>Events Simplified</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
                    <a class="btn btn-primary btn-lg" href="/accounts/register/">GET STARTED</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src='../images/img2.jpg'>
            </div>
            <div class="carousel-item">
                <img src='../images/img3.jpg'>
            </div>
        </div>
    </div>
-->
    <!--    <div class="col1">
        <h1 class="display">Plan with ease</h1>

    </div>  -->


<h1 style="font-family:  sans-sarief; font-size: 60px; text-align: center; ">Plan with ease</h1>
<hr style="margin: 0px 50px 20px 120px; width:80%; ">



    <div>
        <h4 style=" margin: 0px 20px 0px 20px;text-align: center; font-size: 25px; ">Welcome to Planning Gurus. We do all the heavy work when it comes to planning and organising events.So that you can sit back and relax.</h4>
        
        <div style=" font-size: 80px; margin: 30px;"> &nbsp; &nbsp; &nbsp; &nbsp;
            <i class="fa fa-search" aria-hidden="true"></i> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <i class="fa fa-pencil-square" aria-hidden="true"></i> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <i class="fa fa-credit-card" aria-hidden="true"></i>
            
        </div>
        <div class="text"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            <h1>Search</h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <h1>Book</h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <h1>Pay</h1> 
        </div>

    </div>
    <div class="div1">
        <div class="div2">
            <h2 style="font-size: 40px;">Ease it out</h2>
            <p>Use our services to do away with the hect of roaming around places, looking for perfect destinations.</p><br><br>
            <p>Search the firms and organisations that deal in event management using our search, browse & look through their services, read the reviews and then makek up your mind.</p><br><br>
            <p>Make your booking, share your experience so that it helps us improve our services.</p>
        </div>
        <div class="div3">
            <img src="../Mini_project_final/images/desk.png" style="height: 100%;width:100%">
            <br>
        </div>

    </div>

    <h1 style="text-align: center; font-size:60px; ">Start Here</h1>
    <hr align="center" width="50%">

    <!--card view 1st row -->
    <div class="cardview">
        <div class="card-1">
            <img src="../Mini_project_final/images/Special%20Events.jpg"  alt="avtar" width="100%" height="50%">
            <div class="container">
                <h2 style="font-family: monospace;color: black; font-size:30px; margin-left: 1%; ">Special Events</h2>
                <p style=" font-size: 18px;margin-left: 5px ">Special Events</p>
                <button class="btn">Book Now</button>
            </div>

        </div>
        <div class="card-1">
            <img src="../Mini_project_final/images/Corporate%20gathering.jpg" alt="Gathering" width="100%" height="50%">
            <div class="container">
                <h2 style="font-family: monospace;color: black; font-size:30px;">Corporate Gathering</h2>
                <p style=" font-size: 18px;margin-left: 5px ">Corporate Gathering</p>
                <button class="btn">Book Now</button>

            </div>
        </div>
        <div class="card-1">
            <img src="../Mini_project_final/images/Festive%20Parties.jpg" alt="Festive party" width="100%" height="50%">
            <div class="container">
                <h2 style="font-family: monospace;color: black; font-size:30px ">Festive Parties</h2>
                <p style=" font-size: 18px;margin-left: 5px ">Festive Party Celebration</p>
                <button class="btn">Book Now</button>

            </div>

        </div>
    </div>



    <!-- Card view second row-->
    <div class="cardview">
        <div class="card-1">
            <img src="../Mini_project_final/images/Anniversary.jpg" alt="avtar" width="100%" height="50%">
            <div class="container">
                <h2 style="font-family: monospace;color: black; font-size:30px ">Anniversary</h2>
                <p style=" font-size: 18px;margin-left: 5px ">Anniversary Celebration</p>
                <button class="btn">Book Now</button>

            </div>

        </div>

        <div class="card-1">
            <img src="../Mini_project_final/images/Destination%20Wedding.png" alt="Gathering" width="100%" height="50%">
            <div class="container">
                <h2 style="font-family: monospace;color: black; font-size:30px ">Destination Wedding</h2>
                <p style=" font-size: 18px;margin-left: 5px ">Destination Wedding Celebration</p>
                <button class="btn">Book Now</button>

            </div>
        </div>
        <div class="card-1">
            <img src="../Mini_project_final/images/wedding.jpg" alt="Festive party" width="100%" height="50%">
            <div class="container">
                <h2 style="font-family: monospace;color: black; font-size:30px ">Wedding</h2>
                <p style=" font-size: 18px;margin-left: 5px ">Wedding Celebration</p>
                <button class="btn">Book Now</button>

            </div>

        </div>
    </div>

    <!-- Card view third row-->
    <div class="cardview">
        <div class="card-1">
            <img src="../Mini_project_final/images/Special%20Events.jpg" alt="avtar" width="100%" height="50%">
            <div class="container">
                <h2 style="font-family: monospace;color: black; font-size:30px ">Birthday</h2>
                <p style=" font-size: 18px;margin-left: 5px ">Birthday Celebration</p>
                <button class="btn">Book Now</button>

            </div>

        </div>
    </div>

    -->




    <hr>

    <!-- Two column Section-->

    <div class="div1">
        <div class="div2">
            <h2 style="font-size: 40px; color: black;">Our Philosophy</h2>
            <p>We know that greatness in a disruptive era requires bold ambition,curious talent and a culture that believes we're smarter together.</p><br><br>
            <p>We approach each challenge holistically, with best-in-class expertise in management,creativity,technology,logistics and security.</p><br><br>
            <p>While this may seem a little too far fetched, we manage to achieve.</p>
        </div>
        <div class="div3">
            <img src="https://planninggurus.s3.amazonaws.com/static/img/philosophy.jpg" height="100%" width="100%">
            <br>
        </div>

    </div>







    <!--FOOTER-->
    <footer id="internal-link">
        <div class="footer">
            <div class="inner-footer">
                <div class="footer-items">
                    <img src="../Mini_project_final/images/eventzilla.png" style="position: relative; top: 15%; " height="50%" width="70%">
                </div>
                <div class="footer-items">
                    <h2>CONTACT US</h2>
                    <ul>
                        <li>555-555-555</li>
                        <li>email@pg.com</li>
                        <li>100,Krishna Nagar</li>
                        <li>Mathura,UP</li>
                    </ul>
                </div>
                <div class="footer-items">
                    <h2>OUR HOURS</h2>
                    <ul>
                        <li>Monday:9am-5am</li>
                        <li>Saturday:10am-5am</li>
                        <li>Sunday closed</li>

                    </ul>
                </div>
                <div class="footer-items">
                    <h2>SERVICE AREA</h2>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Mathura,UP 281004</li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Lucknow,UP,226018</li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Delhi,110010</li>
                    </ul>
                </div>
                <div class="social-media">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-google" aria-hidden="true"></i></a>
                </div>
                <div class="footer-bottom">Copyright &copy; EventZilla.All rights reserved</div>
            </div>


        </div>

    </footer>
    <!-- End of footer-->
</body>

</html>
