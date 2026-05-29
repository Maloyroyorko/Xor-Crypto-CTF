<?php

$cipher="6d6874705c3f2b2d1a4c4b2c3a2d5c5d2c";
$flag="";
$key=0x13;

$hexa=str_split($cipher,2);

foreach($hexa as $hex){
		$cc=hexdec($hex) ^ $key;
$flag .=chr($cc);

}
echo $flag;



?>
