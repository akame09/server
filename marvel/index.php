<?php

$ts = "5";
$publicKey = "5854849fc4d50588d0553a400c702801";
$privateKey= "87f461b77284f3c04c9fe080c4135d77b14dd771";

$hash = md5($ts.$privateKey.$publicKey);

$URI = "https://gateway.marvel.com/v1/public/characters?name=hulk&ts=$ts&apikey=$publicKey&hash=$hash";

//php_network_getaddresses();


$data = file_get_contents($URI);



/*$ch= curl_init();
curl_setopt($ch, CURLOPT_URL, $URI);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);*/

//echo"<pre>";

$result = json_decode($data, true);

//var_dump(json_decode($result));

echo "Personaje: ".$result["data"]["results"][0]["name"]."<br>";
echo "Descripcion: ".$result["data"]["results"][0]["description"]."<br>";

//echo $result["data"]["resultado"][0]["thumbnail"]["path"].".jpg"."<br>";

//echo "</pre>";
