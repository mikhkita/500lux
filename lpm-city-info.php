<?php
require_once("ipgeobase.php");
$lpm_geobase = new IPGeoBase();
$lpm_city_data = $lpm_geobase->getRecord($_SERVER["REMOTE_ADDR"]);
$lpm_city_info = "<b>Город и страна заполнившего анкету</b><br>";

//GA info                                          
$lpm_city_info .= "Страна: ".$lpm_city_data['cc']."<br>\r\n";
$lpm_city_info .= "Город: ".$lpm_city_data['city']."<br>\r\n";

/*
array(7) {
  ["range"]=>
  string(27) "46.46.128.0 - 46.46.169.255"
  ["cc"]=>
  string(2) "RU"
  ["city"]=>
  string(6) "Москва"
  ["region"]=>
  string(6) "Москва"
  ["district"]=>
  string(29) "Центральный федеральный округ"
  ["lat"]=>
  string(9) "55.755787"
  ["lng"]=>
  string(9) "37.617634"
}
*/
     
?>