<?php
namespace REAL\SHIT;
function abs($num){
	return ++$num;
}
$val=-100;

$a=abs($val);
$b=\abs($val);
echo "\"$a - $b\"";

