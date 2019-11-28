<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../Mini_project_final/css/menu.css">
  
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    



</head>
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
        color: white;
    }

    .col1 .display {
        text-align: center;
        font-size: 60px;
        margin: 50px;
    }

    .div-1 {
        margin: 40px;
        border: 2px solid gray;
        border-radius: 8px;
        height: 200px;
    }

    .div-2 {
        border: 1px solid gray;
        border-radius: 5px;
        margin: 10px;
        height: 110px;
        padding-left: 10px;
        padding-top: 6px;
    }
    /*Menu finish*/
    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  margin: 100px;
  border-bottom: 1px solid #ddd;
    
}
    .tab{
        margin: 20px;
    }

</style>

<body>
  <div class="mainmenu">
        <ul>
            <li class="first"><i class="fa fa-eur" aria-hidden="true"></i>
                EVENTZILLA</li>
            <li class="active"><a href="../Mini_project_final/index.php"><i class="fa fa-home" aria-hidden="true"></i>
                    Home</a></li>
            <li><a href="#internal-link"><i class="fa fa-rss" aria-hidden="true"></i>
                    Blog</a></li>
            <li><a href="../Mini_project_final/services.php"><i class="fa fa-stop-circle" aria-hidden="true"></i>
                    Services</a></li>
            <li><a href="../Mini_project_final/book.php"><i class="fa fa-bed" aria-hidden="true"></i>
                    Book Now</a></li>
            <li><a href="../Mini_project_final/home.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
                    Log Out</a></li>
                    
            
        </ul>
    </div>
   <div class="tab">
     <table>
        <tr>
            <th>Id</th>
            <th>Date</th>
            <th>City</th>
            <th>State</th>
            <th>Emf</th>
        </tr>
        
    </table>
    </div>
</body>

</html>
