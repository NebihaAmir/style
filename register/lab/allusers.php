<?php
try {$url = "http://lab.icraftsoft.net:6060/users/";
        				
$result = file_get_contents($url);		
echo $result; 
	
} catch (Exception $e) {
	echo "error";
}
		
?>