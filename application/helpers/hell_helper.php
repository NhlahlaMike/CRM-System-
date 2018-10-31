<?php
function fixrn($json)
{
	$json=preg_replace("!\r?\n!", "", $json);
	
	return $json;
}

	 function add( $variable, $words ) {
		$temp = explode( $words, $variable );
		$temp[ 1 ] += 1;
		$num = 123;
		$str_length = 3;
		$number= substr("0000{$temp[1]}", -$str_length);
		return $number=$words.$number;
	}

?>

