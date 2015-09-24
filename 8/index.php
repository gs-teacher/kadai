<?php
// カテゴリーテーブルからカテゴリー一覧を、とりあえずカテゴリーIDの小さい順から取得
// 各カテゴリーごとに、for文で、ブロックを作る
// 各カテゴリー毎に、ニューステーブルから3件ずつニュースを取得するSQLを発行する
// 各ニュースのタイトルを表示する
?>
<html>
<head>
<meta charset="utf-8">
<title>Topページ</title>
</head>
<body>
<h2><a href="category.php">カテゴリー1</a></h2>
<ul>
<li><a href="news.php">カテゴリ1-ニュース1タイトル</a></li>
<li><a href="news.php">カテゴリ1-ニュース2タイトル</a></li>
<li><a href="news.php">カテゴリ1-ニュース3タイトル</a></li>
</ul>
<h2><a href="category.php">カテゴリー2</a></h2>
<ul>
<li><a href="news.php">カテゴリ2-ニュース1タイトル</a></li>
<li><a href="news.php">カテゴリ2-ニュース2タイトル</a></li>
<li><a href="news.php">カテゴリ2-ニュース3タイトル</a></li>
</ul>
<h2><a href="category.php">カテゴリー3</a></h2>
<ul>
<li><a href="news.php">カテゴリ3-ニュース1タイトル</a></li>
<li><a href="news.php">カテゴリ3-ニュース2タイトル</a></li>
<li><a href="news.php">カテゴリ3-ニュース3タイトル</a></li>
</ul>
</body>
</html>