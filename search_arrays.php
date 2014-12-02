<?php
 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


 

function searchNames($searchFor, $arrayToSearch){
 	$result = array_search($searchFor, $arrayToSearch);
 	var_dump($result);
 
	 if($result === false){
	 	echo $searchFor . " is not in the array" . PHP_EOL;
	 		return 'false';
	 	}else {
	 		
	 		echo  $searchFor . " is in the array" . PHP_EOL;
	 		return 'True';
	 	}
	} 
 
 $searchFor = 'Mike';
 $arrayToSearch = $names; 
echo searchNames($searchFor,$arrayToSearch) . PHP_EOL;