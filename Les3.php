<?php
	echo "1-е задание<br>";
	$x = 0;
	while($x<100){
	$x++;
	if($x%3==0){
	echo "$x<br> ";
	} 
	} // 1-е заданиие
	echo "<hr>2-е задание<br>";
	
	$i = 0;
	do{
		if($i==0){
		$q = "-это ноль";
			}
		elseif($i%2==0){
			$q = "-это четное число";
			}
		else{
			$q = "-это нечетное число";
		}
		echo "$i $q<br>";
		$i++;
	} while($i<=10);
		
	echo "<hr>3-е задание<br>";
	
	$regs = ["Самарская область"=>["Самара","Чааевск","Тольятти"],
			"Московская область"=>["Москва","Зеленоград","Клин"],
			"Ленинградская область"=>["Всеволжск","Павловск","Кронштадт"]					 
		    ];
			$str = implode(",",$regs);
		  foreach($regs as $reg =>$sity){
		echo "$reg: $str<br>";
		  }
		
		
?>	