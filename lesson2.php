<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。


// ・現在日時（xxxx年xx月xx日（x曜日））
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)

$week = [ "日", "月", "火", "水", "木", "金", "土" ]; //日本の曜日配列
$week = $week[date("w")]; //英(数値)→日(Str)書き換え

$today = new DateTime();
echo "・現在日時（{$today->format('Y年m月d日')}（{$week}曜日））\n";
echo "<br />";

$threeDayslater = new DateTime('+3 day');
echo "・現在日時から３日後（{$threeDayslater->format('Y年m月d日 G時i分s秒')}）\n";
echo "<br />";

$beforeTime = new DateTime('-12 hours');
echo "・現在日時から１２時間前（{$beforeTime->format('Y年m月d日 G時i分s秒')}）\n";
echo "<br />";


$toDay = new DateTime('now');
$day = new DateTime('2020-01-01');

$objInterval = $day->diff($toDay);
echo "・2020年元旦から現在までの経過日数（{$objInterval->format('%a日')}）\n";
echo "<br />";

//geekationは開始時間まで込してそう
?>