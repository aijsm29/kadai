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


3.
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


4.
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
