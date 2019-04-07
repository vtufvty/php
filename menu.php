<?php
			echo "<ul>";
			$menu = ['<a href="#">home</a>' => 
						['<a href="#">раз</a>', '<a href="#">два</a>', '<a href="#">три</a>'],
			 		'<a href="#">product</a>' => 
			 		['<a href="#">product1</a>', '<a href="#">product2</a>', '<a href="#">product3</a>'],
			 		 '<a href="#">contact</a>' =>
			 		['<a href="#">раз</a>', '<a href="#">два</a>', '<a href="#">три</a>']
			 		];
			  foreach($menu as $item => $nest){
				echo "<li>$item<ul>";
						foreach ($nest as $val){
							echo "<li>$val</li>";
						}
						echo "</ul>";
					}
				echo "</ul>";
				/* подсмотрел реализацие вложенного меню в решении. логику понимаю, а правильный код пока не получается. пишу код в Sublime text, и здесь почему то  после знака # получается закоментированный текст, поэтому пришлось ссылки вставлять в массив в кавычки '', изначально делал их внутри тега <li> */  
?>				 