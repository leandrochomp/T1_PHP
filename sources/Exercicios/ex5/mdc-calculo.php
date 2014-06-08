<?php

session_start();
$_SESSION['resultado'] = '0';
$_SESSION['vlr1'] = null;
$_SESSION['vlr2'] = null;

if(isset($_POST["calcular"]))
{

	$a  = $_POST["num1"];
	$b  = $_POST["num2"];
}
else
{
	header('Location: mcd-form.php');
}

while(($resto = $a%$b) != 0)
{
	$c = $resto;
	$a = $b;
	$b = $c;
}

$_SESSION['resultado'] = $b;
$_SESSION['vlr1'] = $_POST["num1"];
$_SESSION['vlr2'] = $_POST["num2"];

header('Location: mdc-resultado.php');
?>