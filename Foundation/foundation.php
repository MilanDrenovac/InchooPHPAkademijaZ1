<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h1>Welcome to Foundation?</h1>
        </div>
    </div>

    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <div class="callout">
                <a href="../index.html" class="button">Index</a>
                <a href="../Bootstrap/Bootstrap.php" class="success button">Bootstrap</a>
                <a href="../Skeleton/skeleton.php" class="alert button">Skeleton</a>
                <a href="../Custom/custom.php" class="secondary button">Custom</a></p>
                <h3>We&rsquo;re stoked you want to try Foundation! </h3>
                <p>Man they included a lot here</p>
                <p>Way more then I need right now so I'm just going to use the top part really...</p>
                <div class="grid-x grid-padding-x">
                    <div class="large-4 medium-4 cell">
                        <p>Right now I'll just use this part because I'm lazy</p>
                    </div>
                    <div class="large-4 medium-4 cell">
                        <form method="get" class="try">
                            Number 1: <input type="text" name="A" style="color: #000;"><br>
                            Number 2: <input type="text" name="B" style="color: #000;"><br>
                            Number 3: <input type="text" name="C" style="color: #000;"><br>
                            Number 4: <input type="text" name="D" style="color: #000;"><br>
                            Number 5: <input type="text" name="E" style="color: #000;"><br>
                            <input class="button button-primary"  type="submit">
                        </form>
                    </div>
                    <div class="large-4 medium-4 cell">
                        <p style="color: blueviolet">Very Responsive</p><br /><p>This is here so you know it's Responsive!</p>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-4 medium-4 medium-push-2 cell">
                        <?php
                        $var1 = $_GET["A"];
                        $var2 = $_GET["B"];
                        $var3 = $_GET["C"];
                        $var4 = $_GET["D"];
                        $var5 = $_GET["E"];
                        if (is_numeric($var1) && is_numeric($var2) && is_numeric($var3) && is_numeric($var4) && is_numeric($var5)) {
                            if (is_decimal($var1) || is_decimal($var2) || is_decimal($var3) || is_decimal($var4) || is_decimal($var5)){
                                echo "It's not really aligned with decimal numbers sorry...";
                            }
                            echo 'The sum of your numbers is:';
                            echo '<p align="right">', $var1, '<br>', $var2, '<br>', $var3, '<br>', $var4, '<br><u>', $var5, '</u><br>', $var1 + $var2 + $var3 + $var4 + $var5, '</p>';

                        }
                        else{
                            echo 'Sorry thats not numbers...';
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>

<script src="../Bootstrap/js/vendor/jquery.js"></script>
<script src="../Bootstrap/js/vendor/what-input.js"></script>
<script src="../Bootstrap/js/vendor/foundation.js"></script>
<script src="../Bootstrap/js/app.js"></script>
</body>
</html>