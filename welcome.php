<html>
<body>

<?php
$var1 = $_GET["A"];
$var2 = $_GET["B"];
?>

<?php
if (is_numeric($var1) && is_numeric($var2))
{
 echo 'A: ',$var1,'<br>';
  echo 'B: ',$var2,'<br>';
  echo 'Addition: ' ,$var1+$var2,'<br>';
  echo 'Subtraction: ',$var1-$var2,'<br>';
  echo 'Multiplication: ',$var1*$var2,'<br>';
  echo 'Division: ',$var1/$var2,'<br>';
  }
else{
    echo 'Sorry thats not numbers...';
}
?>
</body>



</html>