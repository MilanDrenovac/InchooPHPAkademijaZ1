<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Simply Me</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }
        p {font-size: 16px;}
        .margin {margin-bottom: 45px;}
        .bg-1 {
            background-color: #1abc9c; /* Green */
            color: #ffffff;
        }
        .bg-2 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }
        .bg-3 {
            background-color: #ffffff; /* White */
            color: #555555;
        }
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }
        .navbar-nav  li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">At least it's not ugly right?(maybe it is)</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Index</a></li>
                <li><a href="foundation.php">Foundation</a></li>
                <li><a href="skeleton.php">Skeleton</a></li>
                <li><a href="custom.php">Custom</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
    <h3 class="margin">Inchoo PHP Academy 2019</h3>
    <img src="images/InchooPHP.png" class="img-responsive img-circle margin" style="display:inline" alt="IPA" width="350" height="350">
    <h3>Bootstrap Test</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    <h3 class="margin">Input Two Numbers</h3>
    <p>If all works well, this site will compare them...</p>
    <form method="get" class="try">
        Variable 1: <input type="text" name="A" style="color: #000;"><br>
        Variable 2: <input type="text" name="B" style="color: #000;"><br>
        <input class="btn btn-default btn-lg"  type="submit">
    </form>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Where To Find Me?</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <p>Simple Operations</p>
            <img src="images/Simple%20operators.png" class="img-responsive margin" style="width:100%" alt="Image">
            <div>
                <?php
                $var1 = $_GET["A"];
                $var2 = $_GET["B"];
                if (is_numeric($var1) || is_numeric($var2))
                {
                    if ($var1>$var2)
                    {
                        echo $var1,'>',$var2,'<br>';
                    };
                    if ($var1<$var2)
                    {
                        echo $var1,'<',$var2,'<br>';
                    }
                    if ($var1==$var2)
                    {
                        echo $var1,'=',$var2,'<br>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-sm-4">
            <p>More simple operations</p>
            <img src="images/Simple2.jpeg" class="img-responsive margin" style="width:100%" alt="Image">
            <?php
            $var1 = $_GET["A"];
            $var2 = $_GET["B"];
            if (is_numeric($var1) || is_numeric($var2))
            {
                if ($var1>=$var2)
                {
                    echo $var1,'>=',$var2,'<br>';
                };
                if ($var1<=$var2)
                {
                    echo $var1,'<=',$var2,'<br>';
                }
                if ($var1<>$var2)
                {
                    echo $var1,'<>',$var2,'<br>';
                }
            }
            ?>
        </div>
        <div class="col-sm-4">
            <p>Well I ran out of images so heres a simple increase or decrease!</p>
            <img src="images/Shrug.png" class="img-responsive margin" style="width:100%" alt="Image">
            <?php
            $var1 = $_GET["A"];
            $var2 = $_GET["B"];
            if (is_numeric($var1) || is_numeric($var2))
            {
                echo 'A: ',--$var1,'<br>';
                echo 'B: ',++$var2,'<br>';
                echo 'See if I use var++ here it woudnt display it the increase!';
            }
            ?>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
    <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p>
</footer>

</body>