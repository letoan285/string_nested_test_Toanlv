<?php 

namespace App;

class Solution
{
	public function solution($string) 
	{
		$characters = ['{','(','[','<','V'];
		$symmetricCharacters = ['}',')',']','>','W'];
		$resultCharacters = ['{}','()','[]','<>','VW'];
		$stack = [];
		for ($i = 0; $i < strlen($string); $i++) {
		    $c = $string[$i];
		    if (in_array($c, $characters)) {
		      $stack[] = $c;
		    }
		    else if (in_array($c,$symmetricCharacters)) {
		    	$t = array_pop($stack) . $c;
		      	if ( !in_array($t,$resultCharacters) ) {
		      		return 0;
		      	}
		    }
		    else {
		      return 0;
		    }
		 }
		return count($stack) > 0 ? 0 : 1;
	}
}