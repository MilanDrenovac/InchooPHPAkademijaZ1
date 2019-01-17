<head>
    <link rel="stylesheet" href="css/custom.css">
    <title>Grid Generator</title>
    <meta charset="utf-8">
</head>
<body>
<h1>Yeah so this is Grid Generator</h1>
<p>It's way simpler then I imagined so let me borrow some CSS from Skeleton at least for the buttons...</p><br>
<p>Also I use POST time time instead of GET so it's technically more "secure"</p>
<a class="button" href="../index.html">Homepage aka Index</a>
<a class="button" href="../Bootstrap/Bootstrap.php">Bootstrap</a>
<a class="button" href="../Skeleton/skeleton.php">Skeleton</a>
<a class="button" href="../Foundation/foundation.php">Foundation</a>
<?php
if (isset($_POST['color']))
{
    $color = $_POST['color'];
}
else {
    $color = 'white';
}
?>
<div class="section group">
    <div class="col span_1_of_3">
        <body bgcolor="<?php echo $color; ?>">

        <form action="" method="POST">
            Input background color: <input type="text" name="color">
            <input type="submit" name="submit" value="change">
    </div>
    <div class="col span_1_of_3">
        <p>Click Change to Change Background Color</p>
    </div>
    <div class="col span_1_of_3">
        <p>If you change it it's good! I bet theres weird cases where it won't work!</p>
    </div>
</div>
</div>
</body>