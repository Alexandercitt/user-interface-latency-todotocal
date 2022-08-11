<?php

sleep(1);
$randomizer = rand(0,1);


if ($randomizer == 0){
	header('Location: https://citt.me/thesis/experiment/'); //slow, low price
	die();
}elseif ($randomizer == 1){
	header('Location: https://citt.me/thesis/experimentb/'); //slow, mid price
	die();
}else{
	echo 'ERRROR';
	die();
}


?>