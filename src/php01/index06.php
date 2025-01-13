<?php
// for
for($i = 0; $i < 4; $i++) {
    echo $i;
}

echo "<br />";

for($f = 1; $f <= 5; $f++) {
    echo $f * 2 . '<br />';
}

// while
$ii = 0;

while ($ii < 3) {
    echo 'ii = ' . $ii . '<br />';
    $ii += 1;
}

echo "<br />";

$count = 0;

while ($count < 20) {
    $count += 1;
    echo $count . '<br />';
}

// while~break
$iii = 0;
while($iii < 10){
    if($iii == 5){
        break;
        // $iiiが5の時、ループから抜ける。
    }
    echo $iii;
    $iii++;
}

echo "<br />";

// continue
$iiii = 0;
while($iiii < 10){
    if($iiii == 5){
        $iiii++;
        continue;
        // $iiiiが5の時、$iiiiに1を足す処理をし、スキップする。
    }
    echo $iiii;
    $iiii++;
}
echo "<br />";

$count100 = 0;

while($count100 <= 100) {
    if($count100 === 20){
        break;
    }
    if($count100 % 3 === 0){
        $count100++;
        continue;
    }
    echo $count100 . "<br />";
    $count100++;
}

// do...while
$iiiii = 0;
do {
    echo $iiiii . '<br />';
    $iiiii++;
}while($iiiii < 5);

$num = 0;

do {
    echo 'num = ' . $num . '<br />';
    $num++;
}while($num < 3);

// FizzBuzz
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for($iiiiii = 1; $iiiiii <= 50; $iiiiii++) {
    if($iiiiii % 3 == 0 && $iiiiii % 5 == 0){
        echo $FizzBuzz . "<br />";
    }elseif($iiiiii % 3 == 0){
        echo $Fizz . "<br />";
    }elseif($iiiiii % 5 == 0){
        echo $Buzz . "<br />";
    }else{
        echo $iiiiii . "<br />";
    }
}

// 二重ループ
for ($j = 1; $j < 6; $j++){
    for($l = 1; $l < 6; $l++){
        echo "●";
    }
    echo "<br />";
}
