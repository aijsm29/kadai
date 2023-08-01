1.
<?php
//2倍にして結果を返す関数
function sum($max){
  
  return $max *2;
}

//関数を実行
echo sum(9);


2.
<?php
//$a と $b　を足した結果を返す関数
function add($a, $b){
    
  return $a + $b;
 }
 
 //関数を実行
 echo add(3,7);
?>

3.
<?php
//配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数
function sum($arr) {
    $result= $arr[0];
    

    foreach($arr as $num) {
        $result *= $num;
    }
    
    return $result;
}

// 関数を実行
echo sum(array(1, 3, 5 ,7, 9));
?>

4.
<?php
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if ($max_number < $a);{
        $max_number = $a;
    }
  }
  
  return $max_number;
}

echo max_array(array(2,5,8,10,9));

echo "\n"
?>

5.
【strip_tags】HTMLタグを取り除く
<?php
$str = "<h1>HTMLタグの削除</h1>";
echo strip_tags($str) ."\n";
?>

【array_push】配列の最後に要素を追加する    
<?php
$num = [1, 2];

//array_pushを使用して要素を追加する
array_push($num, 3, 4);

print_r($num);
?>

【array_merge】配列を結合する
<?php
$array1 = array(1, 2);
$array2 = array("apple", "melon");
$result = array_merge($array1, $array2);
print_r($result);
?>

【time.mktime】タイムスタンプを取得する
<?php
$timestamp = mktime(22, 00, 00, 5, 2, 1988);
 echo $timestamp;
?>

 【date】日付や時刻を取得する
<?php
date_default_timezone_set('Asia/Tokyo');
echo date('Y-m-d H:i:s');
?>


