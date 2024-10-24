<!-- 演算子 -->
<?php
$a = 15;
$b = 3;
$c = 10;

echo $a + $b;
echo "<br />";
echo $a - $b;
echo "<br />";
echo $a * $b;
echo "<br />";
echo $a / $b;
echo "<br />";
echo $a % $c;
echo "<br />";
?>

<!-- 複合演算子 -->
<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

$a = $b;
$c += $d;

echo $a;
echo "<br />";
echo $c;
echo "<br />";
?>
<!-- 比較演算子 -->
<?php
$a = 20;
$b = 5;

echo ($a > $b);
echo "<br />";
?>
<!-- 論理的演算子 -->
<?php
$a = 20;
$b = 5;

echo ($a > 10 && $a < 30);
echo "<br />";
?>
<!-- 加算子・減算子-->
<?php
$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo (++$a);
echo "<br />";
echo ($b++);
echo "<br />";
echo (--$c);
echo "<br />";
echo ($d--);
echo "<br />";
?>