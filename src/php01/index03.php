<?php
// 変数
$item = "PHP";
echo $item;

// 定数
const FELANGUAGE = "Vue.js";
echo "<br />";
echo FELANGUAGE;

// 文字列(string)は''または""で括られている必要がある
$item = "PHP";

// 整数(integer)は何かで括る必要がない
$item = 123;

// 練習
echo "<br />";
echo 20;
echo "<br />";
echo "こんにちわ";
echo "<br />";

// 連結演算子
$name1 = "Sato" . "Taro";
$name2 = "Tanaka";
$last_name = "Yamada";
$first_name = "Saburo";

echo $name1;
echo "<br />";
echo $name2 . "Jiro";
echo "<br />";
echo $last_name . $first_name;

// 連結演算子 練習
$name_Tanaka = "Tanaka";
$last_name_Yamada = "Yamada";
$first_name_Saburo = "Saburo";

echo "<br />";
echo $name_Tanaka . "Jiro";
echo "<br />";
echo $last_name_Yamada . $first_name_Saburo;
echo "<br />";