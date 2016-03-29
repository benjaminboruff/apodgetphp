<?php

$ch = curl_init("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY");
//$fp = fopen("apod.json", "w");

//curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
//fclose($fp);
 ?>
