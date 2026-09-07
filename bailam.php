<?php
// Trac nghiem
// 1. c
// 2. b
// 3. a
// 4. b
// 5. b

/*
//Bài 1
for ($a=1; $a<= 10; $a++){
    if ($a %2==0){
        echo $a." ";
    }
}
*/

/*
//bài 2
$a=7;
$songuyen= true;
if ($a<2){
$songuyen = false;
} else {
    for ($i=2;$i<= sqrt($a);$i++){
        if ($a % $i ==0){
            $songuyen = false;
            break;
        }
    }}

if ($songuyen){
    echo" $a là số nguyên tố";
} else {
    echo "$a không phải số nguyên tố";
}

*/


/*
//bài 3
function inhinhchunhat($rong,$cao){
    for ($i=0; $i <$cao; $i++){
        for ($a=0; $a<$rong; $a++){
            echo "* ";
        }
        echo "<br>";
    }
}
inhinhchunhat(5,3);
*/

// THỰC HÀNH

/*
//bài 1
$a=8;
if ($a%2==0){
    echo $a. "là số chẵn";
}
else {
    echo $a . "là số lẻ";
}
*/

/*
//bài 2
$gki=7.5;
$cki=8.5;
$tbinh = ($gki*0.3) +($cki* 0.7);
echo "Điểm trung bình: " . $tbinh . "<br>";
if ($tbinh>= 9.0) {
    echo "Hạng: Xuất sắc";
} elseif ($tbinh >= 7.0&& $tbinh < 9.0) {
    echo "Hạng: Giỏi";
} elseif ($tbinh >= 5.0 && $tbinh < 7.0) {
    echo "Hạng: Khá";
} else {
    echo "Hạng: Trung bình - Yếu";
}
*/


/*
// bài 3
$namnay=date('Y');
if ($namnay%2== 0) {
    echo "Năm nay (" . $namnay . ") là năm chẵn";
} else {
    echo "Năm nay (" . $namnay . ") là năm lẻ";
}
*/


/*
// bài 4

for ($i=1; $i<=100; $i++) {
    echo $i . " ";
}
    */
?>
