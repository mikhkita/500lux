<?php

$myhost = $_SERVER['HTTP_HOST'];


$lpm_ref_info = "<b>Ad Services Tags</b><br>";

//GA info                                          
$lpm_ref_info .= "Source type (type): ".$_GET['type']."<br>\r\n";
$lpm_ref_info .= "Source (source): ".$_GET['source']."<br>\r\n";
$lpm_ref_info .= "Add phrases (added): ".$_GET['added']."<br>\r\n";
$lpm_ref_info .= "Position type (block): ".$_GET['block']."<br>\r\n";
$lpm_ref_info .= "Position (pos): ".$_GET['pos']."<br>\r\n";
$lpm_ref_info .= "Keyword (key): ".$_GET['key']."<br>\r\n";
$lpm_ref_info .= "Campaign id (campaign): ".$_GET['campaign']."<br>\r\n";
$lpm_ref_info .= "Ad id (ad): ".$_GET['ad']."<br>\r\n";
$lpm_ref_info .= "Phrase id (phrase): ".$_GET['phrase']."<br>\r\n";

$lpm_ref_info .= "<br><b>UTM Tags</b><br><br>";
$lpm_ref_info .= "Source: ".$_GET['utm_source']."<br>\r\n";
$lpm_ref_info .= "Medium: ".$_GET['utm_medium']."<br>\r\n";
$lpm_ref_info .= "Term: ".$_GET['utm_term']."<br>\r\n";
$lpm_ref_info .= "Content: ".$_GET['utm_content']."<br>\r\n";  
$lpm_ref_info .= "Campaign: ".$_GET['utm_campaign']."<br>\r\n";

$lpm_ref_info .= "<br><b>UTM Tags without UTM prefix</b><br><br>";
$lpm_ref_info .= "Source: ".$_GET['source']."<br>\r\n";
$lpm_ref_info .= "Medium: ".$_GET['medium']."<br>\r\n";
$lpm_ref_info .= "Term: ".$_GET['term']."<br>\r\n";
$lpm_ref_info .= "Content: ".$_GET['content']."<br>\r\n";  
$lpm_ref_info .= "Campaign: ".$_GET['campaign']."<br>\r\n";

$lpm_ref_info .= "<br><b>REQUEST URI</b><br><br>";
$lpm_ref_info .= $REQUEST_URI . "<br>\r\n";
?>
