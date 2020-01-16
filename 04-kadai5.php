<?php

//strip_tags関数を使用すれば、タグを取り除いて出力することが可能です。
//HTMLタグを含む文字列を出力した場合
$html_body = 'テスト<br><p>テスト</p><strong>テスト</strong>';
echo $html_body;
echo "\n";

//strip_tagsを使用して出力した場合は、HTMLタグが除去されて出力されます。
$html_body1 = 'テスト<br><p>テスト</p><strong>テスト</strong>';
$html_body1 = strip_tags($html_body1);
echo $html_body1;
echo "\n";

//1つ以上の要素を配列の最後に追加したい場合には、array_push関数を使用します。
$fruits = ['apple', 'orange', 'melon'];
//array_pushを使用して要素を追加する
//返り値：追加した後の配列の要素数を返します。
//echo array_push($fruits, 'banana', 'pineapple');の返り値は5
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);
echo "\n";

//配列の要素の最後にひとつまたは複数の配列を結合するときは、array_merge関数を使用します。
//配列を作成
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 //配列を結合する
$array = array_merge($array1, $array2, $array3);
print_r($array);

//UNIXタイムスタンプとは、コンピューターのシステム時刻の一種で、
//協定世界時（UTC）での1970年1月1日（午前0時0分0秒）からの経過時間を指します。
//time関数を使用すれば、現在の日時や指定した日時のUnixタイムスタンプを簡単に取得できます。
//現在のタイムスタンプを取得
echo '現在のUnixタイムスタンプ：'.time();
echo '<br>';
//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;
echo "\n";

//time関数と同じく、UNIXタイムスタンプを取得する関数としてmktime関数があります。
//time関数との違いとしては、time関数は現在時刻のUNIXタイムスタンプを取得することができるのに対し、
//mktime関数は指定した日時のUNIXタイムスタンプを取得することができるという点です。
//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;
echo "\n";
//date関数は、引数に指定されたフォーマットを元に、日付文字列を返す関数です。
// 'Y/m/d'
$date1 = date('Y/m/d');
// 'Y-m-d H:i:s'
$date2 = date('Y-m-d H:i:s');
// 'Y年m月d日　H時i分s秒'
$date3 = date('Y年m月d日　H時i分s秒');
// 'Y/m/d'曜日
$w = date('w');
$week = ['日', '月', '火', '水', '木', '金', '土'];
$date4 = date('Y/m/d').$week[$w];
// 時刻を出力
echo $date1.'<br>';
echo $date2.'<br>';
echo $date3.'<br>';
echo $date4;
echo "\n";
