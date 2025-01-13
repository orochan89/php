<?php
// 配列

// array
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo "<br />";

echo $people[0];

echo "<br />";

// 連想配列(添字に文字列を用いた配列)
$people1 = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);

var_dump($people1);

echo "<br />";

echo $people1['person1'];

// 連想配列（別の書き方）
$people2 = [
    'person4' => 'taro',
    'person5' => 'Jiro',
];

echo "<br />";

// 多次元配列(配列の中に配列が入っている)
$people3 = [[
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
],
[
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
]
];

echo $people3[0]["last_name"];

echo "<br />";

// foreach(配列の要素の数だけ繰り返し処理)
$people4 = array('Taro', 'Jiro', 'Saburo');

foreach ($people4 as $person) {
    echo $person;
    echo "<br />";
}

$people5 = array(
    'person6' => 'Taro',
    'person7' => 'Jiro',
    'person8' => 'Saburo'
);

foreach ($people5 as $person => $name){
    print $person . "は" . $name . "です" . '<br />';
}

$people6 = [
    ['Taro', '25', 'men'],
    ['Jiro', '20', 'men'],
    ['nanako', '16', 'women']
];

foreach ($people6 as $persons){
    echo $persons[0] . '(' . $persons[1] . '歳' . $persons[2] . ')' . '<br />';
}