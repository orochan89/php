<?php
// 関数定義の種類

// 引数と戻り値あり
function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}
outputNumber(2);

echo "<br />";

// 引数と戻り値なし
function outputHello()
{
    echo "Hello world";
}

outputHello();

echo "<br />";

// 引数と戻り値あり
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}
$total = text(2, 4);
echo $total;

echo "<br />";

// 練習
function addNumber($aa, $bb)
{
    $add = $aa + $bb;
    return $add;
}
$kei = addNumber(2, 3);
echo $kei;

echo "<br />";

// 問題1
function exam($score1, $score2, $score3)
{
    $total_score = $score1 + $score2 + $score3;
    if($total_score > 210){
        echo $total_score . "点なので合格です";
    }else{
        echo $total_score . "点なので不合格です";
    }
}
echo exam(70, 80, 70);

echo "<br />";

// 問題2

// 三角形の面積
function sankaku($width, $height)
{
    $sankaku_menseki = ($width * $height) / 2;
    echo "底辺が" . $width . "cm,高さが" . $height . "cmの三角形の面積は" .  $sankaku_menseki . "cm²です";
}
echo sankaku(30, 50);

echo "<br />";

// 四角形の面積
function sikaku($width, $height)
{
    $sikaku_menseki = $width * $height;
    echo "横が" . $width . "cm,縦が" . $height . "cmの四角形の面積は" . $sikaku_menseki . "cm²です";
}
echo sikaku(25, 10);

echo "<br />";

// 台形の面積
function daikei($width_top, $width_bottom, $height)
{
    $daikei_menseki = ($width_top + $width_bottom) * $height / 2;
    echo "上底が" . $width_top . "cm,下底が" . $width_bottom . "cm, 高さが" . $height . "cmの台形の面積は" . $daikei_menseki . "cm²です";
}
echo daikei(10, 20, 15);

echo "<br />";

// 問題2　模範解答
function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);