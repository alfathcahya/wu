<?php
  //https://www.wunderground.com/weather/api/d/docs?d=data/almanac
  $json_string = file_get_contents("http://api.wunderground.com/api/ganti_dengan_api_key_masing2/almanac/q/ID/Semarang.json");
  $parsed_json = json_decode($json_string);
  $negara = $parsed_json->response->results[0]->country_name;
  $kota = $parsed_json->response->results[0]->city;
  echo "Nama Negara : $negara<br>";
  echo "Nama Kota : $kota"
?>
