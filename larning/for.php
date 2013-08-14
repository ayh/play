<?php
$news = array(
    1 => array(
        "title" => "おなかすいた",
        "text" => "そうですね。"
    ),
    2 => array(
        "title" => "のどかわいた",
        "text" => "そうですね。"
    )
);

for ($i = 1; $i <=2; $i++) {
    $article_number = $i;
    echo "たいとる：" . $news[$article_number]["title"];
    echo " なかみ：" . $news[$article_number]["text"];
}
