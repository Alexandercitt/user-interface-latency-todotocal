<?php

$randomizer = rand(0,2);

if ($randomizer == 0){
	header('Location: https://tripetto.app/run/XYYKGPXC1K'); //slow, low price
	die();
}elseif ($randomizer == 1){
	header('Location: https://tripetto.app/run/ZKP8UW6L0M'); //slow, mid price
	die();
}else{
	header('Location: https://tripetto.app/run/C4HXZNSN0V'); //slow, high price
	die();
}


?>