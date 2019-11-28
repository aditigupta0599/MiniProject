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
    
    
    /*footer*/
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
    .abc{
        text-align: center;
    }
    
</style>
<body>
    <div class="mainmenu">
        <ul>
            <li class="first"><i class="fa fa-eur" aria-hidden="true"></i>
                EVENTZILLA</li>
            <li class="active"><a href="../Mini_project_final/index.php"><i class="fa fa-home" aria-hidden="true"></i>
                    Home</a></li>
            <!--<li><a href="#internal-link"><i class="fa fa-rss" aria-hidden="true"></i>
                    Blog</a></li>
            <li><a href="../Mini_project_final/services.php"><i class="fa fa-stop-circle" aria-hidden="true"></i>
                    Services</a></li>-->
            <li><a href="../Mini_project_final/makebooking.php"><i class="fa fa-bed" aria-hidden="true"></i>
                    Booking</a></li>
            <li><a href="../Mini_project_final/login1.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
                    Login</a></li>
            <li><a href="../Mini_project_final/signup1.php"><i class="fa fa-user-plus" aria-hidden="true"></i>
                    Sign Up</a></li>
        </ul>
    </div>

    <br>
    <br>
    <br>
    
    
         <h2 class="abc"> You cannot make Booking. You need to Sign Up at first. </h2>
          <!-- Footer   -->
    
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
