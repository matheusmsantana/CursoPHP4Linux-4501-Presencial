<?php

function dividir(int $a,int $b){

	if($a == 0){
		throw new Exception("nao permitido divisao por zero");
	}else{
		return $a / $b;
	}

	try{
	dividir(0,0);
	}catch (Exception $e){
		echo "erro";
		echo $e->getMessage();
	} 	
}	