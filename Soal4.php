<?php
	$i = 1;
	while($i <=50)
	{
		echo $i;
		if ($i % 3 == 0 ){
			if ($i % 5 == 0){
				echo " FooBar";	
			}else{
				echo " Foo";
			}
		}else if ($i % 5 == 0){
			echo " Bar";
		} 
		echo '<br>';
		$i++;
	}
?>