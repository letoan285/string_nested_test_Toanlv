<?php 

require 'vendor/autoload.php';

use App\Solution;

$solution = new Solution;

$string1 = "(([]{})(())(<>))";
$result = $solution->solution($string1);

if($result == 1){
	echo $string1 ." is Nested string - ".$result;
}else {
	echo $string1 ." is not Nested string - ".$result;
}
	

echo "<hr>";
$string2 = "<())";
$result = $solution->solution($string2);

if($result == 1){
	echo $string2 ." is Nested string - ".$result;
}else {
	echo $string2 ." is not Nested string - ".$result;
}


?>
