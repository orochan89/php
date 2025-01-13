<?php
// 算術演算子
$a = 15;
$b = 3;
$c = 10;

$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5;
echo "<br />";

// 代入演算子と複合演算子
$aa = 15;
$bb = 3;
$cc = 10;
$dd = 5;

$aa = $bb;
$cc += $dd;

echo $aa;
echo "<br />";
echo $cc;
echo "<br />";

// 比較演算子
$aaa = 20;
$bbb = 5;

echo ($a > $b);
echo "<br />";

// 論理演算子
$aaaa = 20;
$bbbb = 5;

echo ($a >10 && $a < 30);
echo "<br />";

// 加算子と減算子
$aaaaa = 10;
$bbbbb = 10;
$ccccc = 5;
$ddddd = 5;

echo ++$aaaaa;
echo "<br />";
echo $bbbbb++;
echo "<br />";
echo --$ccccc;
echo "<br />";
echo $ddddd--;
echo "<br />";