<?php
 $header = array();
 $header [] = 'Authorization: Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA'
$url = "https://app.icraftsoft.net:9090/rest/employees";
        				
$result = file_get_contents($url);		
echo $result; 		
?>