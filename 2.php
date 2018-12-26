<?php
$n = 0;
do{
    if ($n == 0){
        echo "$n - это ноль" . "<br>";
        $n++;
    } else {
        if($n % 2 != 0){
            echo "$n - нечетное число" . "<br>";
            $n++;
        } else {
            echo "$n - четное число" . "<br>";
            $n++;
        }
    }
}while($n <= 10);
?>

