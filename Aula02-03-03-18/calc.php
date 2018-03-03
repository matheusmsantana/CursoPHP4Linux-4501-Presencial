<?php

class Calc
{	
	//nao permitir numeros negativos
	//nao ppermitir resultado maior que 50
	public static function soma(float $a,float $b){

		$total = $a + $b;

		if($total<0){
			throw new Exception("nao e permitido resultado negativo!");
		}elseif($total>50){
			throw new Exception("o resultado nao pode passar de 50!");
		}else{
			return $total;
		}
	}

	//nao permitir resultado menor que 0
	public static function subt(float $a,float $b){
		$total = $a - $b;

		if($total<0){
			throw new Exception("nao e permitido resultado negativo!");
		}else{
			return $total;
		}
	}

	//nao permitir multiplicacao por zero
	public static function mult(float $a,float $b){

		if($a == 0){
			throw new Exception("nao permitido multipliar por zero!");
		}elseif($b == 0){
			throw new Exception("nao permitido multipliar por zero!");
		}else{
			return $a * $b;
		}
	
	}

	//nao permitir divisao por zero
	//nao permitir valor infinito $a == 0
	public static function div(float $a,float $b){
		if($a == 0){
			throw new Exception("nao permitido divisao por zero!");
		}elseif($b == 0){
			throw new Exception("o divisor nao pode ser zero!");
		}else{
			return $a / $b;
		}
	}
}

try{
	echo Calc::soma(60,0);
}catch  (Exception $e){
	echo 'erro ';
	echo $e->getMessage();	
}

echo '</br>';

try{
	echo Calc::subt(60,40);
}catch  (Exception $e){
	echo 'erro ';
	echo $e->getMessage();	
}

echo '</br>';

try{
	echo Calc::mult(60,40);
}catch  (Exception $e){
	echo 'erro ';
	echo $e->getMessage();	
}

echo '</br>';

try{
	echo Calc::div(60,0);
}catch  (Exception $e){
	echo 'erro ';
	echo $e->getMessage();	
}

/*echo Calc::soma(4,2);

echo Calc::subt(4,2);

echo Calc::mult(4,2);

echo Calc::div(4,2);*/