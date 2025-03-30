<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

$operacion = $_POST['operacion'];

switch ($operacion) { 
    case 'sum':
    print $numero1 + $numero2;
    break;
    case 'subtraction' :
    print $numero2 - $numero1;
    break;
    case 'multiplication':
    print $numero2 * $numero1;
    break;
    case 'division':
    print $numero2 % $numero1;
    break;
}