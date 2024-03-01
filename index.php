<?php

$num1 = 11;
$num2 = 9;

echo "$num1 + $num2 = " . $num1+ $num2 . "<br>";
echo "$num1 - $num2 = " . $num1- $num2 . "<br>";
echo "$num1 * $num2 = " . $num1* $num2 . "<br>";
echo "$num1 / $num2 = " . $num1/ $num2 . "<br>";
echo "$num1 ** $num2 = " . $num1 ** $num2 . "<br>";
echo "$num1 % $num2 = " . $num1 % $num2 . "<br>";
echo "<br>";

echo "$num1++ = " . $num1 ++   . "<br>";
echo "$num1-- = " . $num1 --  . "<br>";
echo "++$num1 = " . ++ $num1   . "<br>";
echo "--$num1 = " . -- $num1  . "<br>";

echo "<br>"."$num1 += 2 = " . $num1 += 2 ;
//$num1 = $num1 + 2
echo  "<br>"."$num1 -= 2 = " . $num1 -= 2 ;
echo  "<br>"."$num1 *= 2 = " . $num1 *= 2 ;
echo  "<br>"."$num1 /= 2 = " . $num1 /= 2 ;
echo "<br>";

echo "<br>" . "num1 = 11";
echo "<br>" . "num2 = 9";
$num3 = ($num1 % $num2);
echo "<br>" . "num3 = (num1 % num2)";
echo "<br>" . "$num1 % $num2 =" . $num3;
$num4 = ($num3 + $num2);
echo "<br>" . "num4 = (num3 + num2) ";
echo "<br>" . "$num3 + $num2 =" . $num4;
$num5 = ($num4 ** 3);
echo "<br>" . "num5 = (num4 ** 3) ";
echo "<br>" . "$num4 ** 3 =" . $num5;


?>
<!-- + - * / ** %  ++ -- += -= *= /= -->
<!-- to hide code --> 



<!-- 
<?php
$name = "raneema risnee"; //string
$age = 25; // integer
$gpa = 7.2; //float
$isAlive = true; // boolean
$_apple;

echo $name;
echo $age;
echo $gpa;
echo $isAlive;

echo $name . "   " . $age . "   " . $gpa;
echo "<br> $name <br> $age <br> $gpa <br> adhnan loosu";

$num10 = 10;
$num20 = 9.2;

echo "<br> $$num10 + $$num20 = " . "$" . $num10 + $num20;
?>

<!DOCTYPE html>
<html>
    <head></head>
        <body>
            <h1> hello <?php $name; ?> </h1>
        </body>
</html>

<?php
$name = "raneema risnee";
?>

<?php
echo $name;
?> -->
