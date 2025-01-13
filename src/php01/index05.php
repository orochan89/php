<?php
// 条件分岐

// if
$a = 5;

if ($a === 5) {
    echo "\$aは5です";
}

echo "<br />";

// if~else
$aa = 7;

if ($aa === 5){
    echo "\$aaは5です";
}else{
    echo "\$aaは5以外です";
}

echo "<br />";

// if~elseif~else

$aaa = 7;
if($aaa === 5){
    echo "\$aaaは5です";
}elseif($aaa === 7){
    echo "\$aaaは7です";
}else{
    echo "\$aaaは5と7以外です";
}

echo "<br />";

// switch
$people = "Saburo";

switch($people){
    case "Saburo":
        echo "三郎です";
        break;
    case "jiro":
        echo "二郎です";
        break;
    case "ichiro":
        echo "一郎です";
        break;
}

echo "<br />";

// 三項演算子
$aaaa = 7;

$bbbb = ($aaaa > 5) ? "TRUE" : "FALSE";
echo $bbbb;

echo "<br />";