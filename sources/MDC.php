<?php 
include('index.php');

$x = $_POST['num1'];  
$y = $_POST['num2'];

function MDC($x,$y) {
        $a = max($x,$y);
        $b = min($x,$y);
        if($a%$b == 0){
                return $b;
        }else{
                return MDC($b,($a%$b));
                print_r($b);
        }
} 	
?>