<?php

$cipher="27 35 27 21 11 11 7b 26 25 32 5f 30 25 21 30 5f 16 25 38 7d";
$key=0x42; //$key="0x42";
$flag="";
$hex3=explode(" ",$cipher);
//$key=hexdec(substr($key,2));
foreach($hex3 as $hexx){

$cc= hexdec($hexx) ^ $key;

$flag .= chr($cc);
}
		
echo "<pre>".$flag."</pre>";


?>
