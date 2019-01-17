<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Spooky Scary Skeletons</title>
    <meta name="description" content="IPA Skeleton">
    <meta name="author" content="Milan Drenovac">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    <div class="row">
    <a class="button" href="index.html">Homepage aka Index</a>
    <a class="button" href="Bootstrap.php">Bootstrap</a>
    <a class="button" href="foundation.php">Foundation</a>
    <a class="button" href="custom.php">Custom</a>
    </div>
    <div class="row">
        <div class="one-half column" style="margin-top: 25%">
            <h4>Basic Page</h4>
            <p>This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up the <a href="http://www.getskeleton.com">Skeleton documentation</a>.</p>
        </div>
        <div class="one-half column" style="margin-top: 25%">
            <h4>Simple enough</h4>
            <p>This responsive thing sure seems like it lives up to it's name of literally being a skeleton...</a>.</p>
        </div>
    </div>
    <div class="row">
        <div class="two-thirds column" style="margin-top: 5%">
            <h2>The task</h2>
            <p>Input some stuff and get it all connected together or something else!</p>
            <form method="get" class="try">
                Text 1: <input type="text" name="A" style="color: #000;"><br>
                Text 2: <input type="text" name="B" style="color: #000;"><br>
                Text 3: <input type="text" name="C" style="color: #000;"><br>
                <input class="button button-primary"  type="submit">
            </form>
            <?php
            $var1 = $_GET["A"];
            $var2 = $_GET["B"];
            $var3 = $_GET["C"];

            echo '<h2>',$var1.$var2.$var3,'</h2>';
            if ($var1 == 'blue')
            {
                echo "<body style='background-color:blue'>";
            }
            ?>
    </div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>