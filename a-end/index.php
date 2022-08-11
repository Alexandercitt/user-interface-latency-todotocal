<?php

$randomizer = rand(0,2);

if ($randomizer == 0){
	header('Location: https://tripetto.app/run/HGJUCQP4EB'); //quick, low price
	die();
}elseif ($randomizer == 1){
	header('Location: https://tripetto.app/run/OUM9X7QSXZ'); //quick, mid price
	die();
}else{
	header('Location: https://tripetto.app/run/KQ7IBFW535'); //quick, high price
	die();
}


?>