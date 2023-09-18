<?php
    for($i = 1; $i<=10; $i++){
        if($i % 2 == 0){
            echo  "$i\n"; 
        }  
    }  
?>
<br>

<?php

    function greet($name){
        echo "Hello Mr $name";
    }
    greet("inzams");

?>

<br>

<?php
    function factorial($n) {
        if ($n <= 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    $number = 5;
    $res = factorial($number);
    echo "$res";

?>

<br>

<?php
    $firstNumber = 0;
    $secondNumber = 1;
    echo "$firstNumber\n";
    for($i=0; $i<=10; $i++){
         $third = $firstNumber + $secondNumber;
         $secondNumber = $firstNumber;
         $firstNumber = $third;
        echo "$third\n";
    }
 
 ?>

