<?php
  $x = 14;
  $y = 10;
  if ($x < 0 && $y < 0)
	$z = $x * $y;
  else if ($x > 0 xor $y > 0) 
	$z = $x + $y;
  else 
	  $z = $x - $y;
	echo "$z<hr>"; // 1 задание
	
	
  $a = rand(0,15);
  switch($a = 10){
	case 0:
		echo 0;
	case 1:
		echo 1;
    case 2:
		echo 2;
	case 3:
		echo 3;
	case 4:
		echo 4;
	case 5:
		echo 5;
	case 6:
		echo 6;
	case 7:
		echo 7;
	case 8:
		echo 8;
	case 9:
		echo 9;
	case 10:
		echo 10;
	case 11:
		echo 11;
	case 12:
		echo 12;
	case 13:
		echo 13;
	case 14:
		echo 14;
	case 15:
		echo "15<hr>";
  }                // Задание 2
  
  function sum($q, $w){
	  return $q+$w;
  }
  function mult($q, $w){
	  return $q*$w;
  }
  function sub($q, $w){
	  return $q-$w;
  }
  function div($q, $w){
	  return $q/$w;
  }
  

	
  function mathOperation($a1, $a2, $oper){
	  switch($oper){
		case sum:
			$a1+$a2;
			break;
		case sub:
			$a1-$a2;
			break;
	  }
  }		
	echo mathOperation(5, 10, sum);
  
 ?>