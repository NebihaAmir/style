
<?php
$data = [
    "first" => $_GET["first"],
    "last" => $_GET["last"],
    "department" => $_GET["department"]
];
        $ch = curl_init("https://app.icraftsoft.net:9090/rest/employee");                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
		curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json'
            ));                                                                                                                   
		 
		$result = curl_exec($ch);
		return $result;

?>