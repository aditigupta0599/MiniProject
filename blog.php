<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- <link rel="stylesheet" href="../CSS project/Home.css"> -->
    
    <style>
        /** {
            box-sizing: border-box;

        }*/
        
       

        .parallax {
            /* The image used */
            background-image: url("images12/imgg.jpg");
            position: relative;

            margin: 0px;
            padding: 0px;
            /* Set a specific height */
            min-height: 650px;
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card-1 {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: 2s;
            width: 270px;
            height: 340px;
            border-radius: 10px;
            float: left;
            margin: 20px;
            box-shadow: 0px 0px 6px grey;


        }

        .card-1:hover {
            box-shadow: 0 8px 26px blue;
            transform: scaleZ(90deg);
        }

        img {
            border-radius: 5px;
            height: 340px;
            width: 270px;
        }

        .container {
            padding: 2px 16px;
            font-size: 20px
        }

        .text {
            color: white;
            position: relative;
            top: -360px;
            left: 20px;

        }

        .text h2 {
            position: absolute;
            top: 270px;
            left: 170px;
            background-color: black;
            color: white;
            border-radius: 2px;
        }

        .menu ul li {
            width: 200px;
            padding-right: 20px;
            font-size: 20px;

        }

        .btn {
            height: 70px;
            width: 150px;
            border: 3px solid black;
            border-radius: 20%;
            padding: 20px;
            padding-bottom: 20px;
            text-align: center;
            font-size: 20px;
            position: relative;
            right: -730px;
            bottom: 65px;
            color: white;
            background-color: coral;

        }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 10%;
            background: #f1f1f1;
            margin-left: 20px;


        }

        form.example button {
            float: left;
            width: 5%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;



        }

        form.example button:hover {
            background: #0b7dda;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }

        .card-2 {

            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: 2s;
            width: 340px;
            height: 450px;
            border-radius: 10px;
            float: left;
            margin: 20px;
            box-shadow: 0px 0px 6px grey;
            margin-left: 45px;
         transition: transform .2s;
             



        }
        
       .card-2:hover{
            transform: scale(1.5); 
            
        }

        .hotel {
            border-radius: 5px;
            height: 340px;

            width: 340px;
        }

        .btn-1 {
            border-radius: 26px;
            width: 140px;
            height: 50px;
            position: relative;
            left: 100px;
            bottom: 118px;
            color: white;
            background-color: coral;
        }

        .checked {
            color: orange;
        }

        .card-3 {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: 2s;
            width: 270px;
            height: 340px;
            border-radius: 10px;
            float: left;
            margin: 20px;
            box-shadow: 0px 0px 6px grey;


        }

        .pagination {
            display: inline-block;
            margin-left: 450px;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
            border-radius: 25px;
            margin: 0 4px;
            height: 30px;
            width: 20px;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        footer {
         
            bottom: 0;
        }

        @media (max-height:800px) {
            footer {
                position: static;
            }

            header {
                padding-top: 40px;
            }
        }


        .footer-distributed {
            background-color: #2c292f;
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 50px 50px 60px 50px;
            margin-top: 2px;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: inline-block;
            vertical-align: top;
        }

        /* Footer left */

        .footer-distributed .footer-left {
            width: 30%;
        }

        .footer-distributed h3 {
            color: #ffffff;
            font: normal 36px 'Cookie', cursive;
            margin: 0;
        }

        /* The company logo */

        .footer-distributed .footer-left img {
            width: 30%;
        }

        .footer-distributed h3 span {
            color: #e0ac1c;
        }

        /* Footer links */

        .footer-distributed .footer-links {
            color: #ffffff;
            margin: 20px 0 12px;
        }

        .footer-distributed .footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }

        .footer-distributed .footer-company-name {
            color: #8f9296;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        /* Footer Center */

        .footer-distributed .footer-center {
            width: 35%;
        }


        .footer-distributed .footer-center i {
            background-color: #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .footer-distributed .footer-center i.fa-envelope {
            font-size: 17px;
            line-height: 38px;
        }

        .footer-distributed .footer-center p {
            display: inline-block;
            color: #ffffff;
            vertical-align: middle;
            margin: 0;
        }

        .footer-distributed .footer-center p span {
            display: block;
            font-weight: normal;
            font-size: 14px;
            line-height: 2;
        }

        .footer-distributed .footer-center p a {
            color: #e0ac1c;
            text-decoration: none;
            ;
        }


        /* Footer Right */

        .footer-distributed .footer-right {
            width: 30%;
        }

        .footer-distributed .footer-company-about {
            line-height: 20px;
            color: #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .footer-distributed .footer-company-about span {
            display: block;
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-distributed .footer-icons {
            margin-top: 25px;
        }

        .footer-distributed .footer-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color: #33383b;
            border-radius: 2px;

            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;

            margin-right: 3px;
            margin-bottom: 5px;
        }
        
        .glow{
            font-size: 80px;
  color: black;
            text-align: center;
        text-shadow: 4px 4px pink;}
        
        
        
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
            color: white;

        }

        .col1 .display {
            text-align: center;
            font-size: 60px;
            margin: 50px;
        }

    </style>
</head>

<body>
 <!--<div class="mainmenu">
       <img src="Imagess/logoo.png" width="80px;" height="90px;" style="float: left"><b>Hello there,Welcome to BonVoyage</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul><li class="active" style="align-content: center;"><a href="home.html">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        
            <li><a href="about.html">About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="Destination Page/mycode.html">Destination</a></li>
            <li><a href="contactus.html">Contact&nbsp;&nbsp;&nbsp;</a></li>
            <a class=" btn" href="Contact.html">BOOK NOW</a>
        </ul></div>-->


    <div class="parallax">
       <div style=" text-align: center;  color: white; font-size: 80px; position: absolute; top: 170px; left: 128px; color: white; text-shadow: 4px 4px black;"><br>A goal without a plan is just a wish..</div>
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

        <!--<div class="mainmenu">
           <!--  <img src="Screenshot%20(272).png" width="10px;" height="10px;" style="float: left"<b style="color: white; font-size: 20px; padding-top: 30px;">Hello there,Welcome to BonVoyage</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul><li class="active" style="align-content: center;"><a href="../home.html">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        
            <li><a href="../about.html">About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="Destination Page/mycode.html">Destination</a></li>
            <li><a href="../contactus.html">Contact&nbsp;&nbsp;&nbsp;</a></li>
            <a class=" btn" href="../Contact.html">BOOK NOW</a>
        </ul>

        </div>-->
    </div>

    <br>

    <h1  style="text-align: center; font-size: 40px;" class="glow">BEST DESTINATION WEDDING</h1>
    <div class="123" style="height:800px;background-color:white; margin-left: 3px;">


        <div style=" width: 100%; height: 400px; position: relative;">
            <div class="card-1">
                <img src="images12/wed.jpg">

                <div class="text"style="color:azure">
                    <h1>Delhi</h1>
                    <h2>8 Tours</h2>
                </div>

            </div>

            <div class="card-1">
                <img src="images12/wed2.jpg" alt="avtar" width="100% ">
                <div class="text">
                    <h1>Lucknow</h1>
                    <h2>8 Tours</h2>
                </div>
            </div>


            <div class="card-1">
                <img src="images12/wed1.jpg" alt="avtar" width="100% ">
                <div class="text">
                    <h1>Amritsar</h1>
                    <h2>8 Tours</h2>
                </div>
            </div>
            <div class="card-1">
                <img src="images12/wed3.jpg" alt="avtar" width="100% ">
                <div class="text">
                    <h1>Jaipur</h1>
                    <h2>8 Tours</h2>
                </div>
            </div>
        </div>

        <div style="background-color: black; height: 120px; width: 90%; margin-left: 70px; color: white;">
            <div class="menu" style="height: 90px; width: 90%;">
                <ul style="display:inline-flex; list-style: none;">
                    <li>Destination</li>
                    <li>Check-in-time</li>
                    <li>Check-out-time</li>
                    <li>Price Limit</li>
                </ul>
                <form class="example">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <form><input type="date" name="bday" style="position: relative; left: 240px; top: -40px; height: 30px;"></form>
                <form><input type="date" name="bday" style="position: relative; left: 480px; top: -74px; height: 30px;"></form>
                <form>
                    <input type="text" style="position: relative; left: 680px;
                    top: -110px; height: 30px; " placeholder="Enter Price Limit">
                </form>
            </div>
            <button class="btn">Search</button>
        </div>
        <h1 style="text-align: center; font-size: 40px;" class="glow">CORPORATE EVENTS</h1>

        <div style="height: 980px; width: 100%;">

            <div class="card-2">
                <img src="images12/fest4.jpg" class="hotel"><br><br>


                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">10 Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">New Delhi,India</div>
                </div> <button class="btn-1">$200/PERSON</button>

               
            </div>

            <div class="card-2">
                <img src="images12/co.jpg" class="hotel">

                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">7 Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">Amritsar,Punjab</div>
                </div>
                <button class="btn-1" style="top: -110px;">$200/PERSON</button>

            </div>

            <div class="card-2">
                <img src="images12/cop.jpg" class="hotel">

                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">10 Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">Mussoorie,Uttarakhand</div>
                </div>
                <button class="btn-1" style="top: -110px;">$200/PERSON</button>

            </div>
            <div class="card-2">
                <img src="images12/copp.jpg" class="hotel">

                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">10 Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">Mumbai</div>
                </div><button class="btn-1" style="top: -110px;">$200/PERSON</button>
            </div>
            <div class="card-2">
                <img src="images12/eve.jpg" class="hotel">

                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">6Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">Shimla</div>
                </div>
                <button class="btn-1" style="top: -110px;">$200/PERSON</button>

            </div>
            <div class="card-2">
                <img src="images12/fest.jpg" class="hotel">

                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">8 Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">Rajasthan</div>
                </div>
                     <button class="btn-1" style="top: -110px;">$200/PERSON</button>
            </div>


        </div>

        <h1 style="text-align: center; font-size: 40px;" class="glow">FESTIVAL EVENTS</h1>
        <div style="height: 970px; width: 100%;">


            <div class="card-2">
                <img src="images12/chrs.jpg" class="hotel">

                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">10 Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">Goa,India</div>
                </div>

            </div>

            <div class="card-2">
                <img src="images12/dur.jpg" class="hotel">

                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">10 Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">Kolkata,India</div>
                </div>

            </div>

            <div class="card-2">
                <img src="images12/diwalii.jpg" class="hotel">

                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">10 Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">Chandigarh,India</div>
                </div>

            </div>

            <div class="card-2">
                <img src="images12/diwali.jpg" class="hotel">

                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">10 Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">Jaipur,India</div>
                </div>

            </div>
            <div class="card-2">
                <img src="images12/fest2.jpeg" class="hotel">

                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">10 Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">Mumbai,India</div>
                </div>

            </div>
            <div class="card-2">
                <img src="images12/chr.jpg" class="hotel">

                <div class="container">
                    <div style="font-family: monospace; font-size: 14px; height: 5px;">10 Days Tour</div><br>
                    <div style="font-family: monospace; font-size: 28px;">Delhi,India</div>
                </div>

            </div>
        </div>
        <h3 style="font-family:monospace; font-size: 50px; text-align: center; text-shadow: 6px 6px pink;" class="glow-2">BIRTHDAY PARTIES</h3>

        <div style=" width: 100%; height: 400px; position: relative; background-image: url();">
            <div class="card-3">
                <img src="images12/birt.jpg">

                <div class="text">
                    <h1>Kolkata</h1>
                    <h2>8 Tours</h2>
                </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>

            </div>

            <div class="card-3">


                <img src="images12/220-ER801705.jpg" alt="avtar" width="100% ">
                <div class="text">
                    <h1>Noida</h1>
                    <h2>8 Tours</h2>
                </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>


            <div class="card-3">
                <img src="images12/220-SM834579.jpg" alt="avtar" width="100% ">
                <div class="text">
                    <h1>Mumbai</h1>
                    <h2>8 Tours</h2>
                </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="card-3">
                <img src="images12/220-SM826021.jpg" alt="avtar" width="100% ">
                <div class="text">
                    <h1>Chandigarh</h1>
                    <h2>8 Tours</h2>
                </div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <span style="padding: 20px; font-size: 30px;"><b>New Orleans  Hotel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hotel De Glace  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Juvet Landscape Hotel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Viceroy Hotel</b></span><br><br><br><br><br>

        <div class="pagination" style="text-align: center;">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>

            <a href="#">&raquo;</a>
        </div><br><br>
        <div style=" width: 100%; height: 540px; position: relative; background-color: brown; background-image: url(images12/jk.jpg); position: relative;">

            <div style="background-color:white; width: 70%; height: 150px; position: absolute; top: 400px; left: 200px; z-index: 5;"><pre style="font-size: 30px; text-align: center;"><b>Subscribe to our NewsLetter</b></pre><form style="text-align: center; margin-bottom: 60px;">
            <input type="text" style="height: 40px; width: 350px;" placeholder= "Enter Email address">
            <button style="height: 40px; width: 100px;">Subscribe</button>
            </form> </div>


        </div>

        <div style="height: 320px; width: 100%; background-color: #2c292f;">
            <footer class="footer-distributed">

                <div class="footer-left">
                    <img src="Screenshot%20(272).png" style="width: 100px; height: 100px;">
                    

                    <p class="footer-links">
                        <a href="#">Home</a>
                        |
                        <a href="#">Blog</a>
                        |
                        <a href="#">About</a>
                        |
                        <a href="#">Contact</a>
                    </p>

                    <p class="footer-company-name">© 2019 Eventzilla Pvt. Ltd.</p>
                </div>

                <div class="footer-center">
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>NH-2,GLA UNIVERSITY
                                </span>
                            MATHURA - 205001</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+91 22-27782183</p>
                    </div>
                    
                </div>
                <div class="footer-right">
                    <p class="footer-company-about">
                        <span>About the company</span>
                        We offer best travelling deals at reasonable price and make sure that the journey became memorable for you.</p>
                    <div class="footer-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </footer>







        </div>


    </div>

</body></html>