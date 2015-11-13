<?php

//include(__DIR__."/gaparse.php");
include("./gaparse.php");

$ip = $_SERVER["REMOTE_ADDR"];
$date = date('Y-m-d H:i:s');

//$ref = isset($_SERVER['HTTP_REFERER']) ? strtolower(trim($_SERVER['HTTP_REFERER'])) : '';
$referers = array(
    'Yandex Direct' => array('name' => 'Yandex Direct', 'substr' => '"^https?\:\/\/(direct\.)?yandex\.\w+\/search"', 'term' => 'text'),
    //'Yandex Search' => array('name' => 'Yandex Search', 'substr' => '"^https?\:\/\/(www\.)?yandex\.\w+\/(.*)from=yandex\.\w+\%3byandsearch\%"', 'term' => 'text'),
    'Yandex_Search' => array('name' => 'Yandex_Search', 'substr' => '"^https?\:\/\/(www\.)?yandex\.\w+\/yandsearch\?"', 'term' => 'text'),
	'Yandex Search' => array('name' => 'Yandex Search', 'substr' => '"^https?\:\/\/(www\.)?yandex\.\w+\/(.*)from=yandex\.\w+\;yandsearch"', 'term' => 'text'),
	'Yandex' => array('name' => 'Yandex', 'substr' => '"^https?\:\/\/(www\.)?yandex\.\w+\/"', 'term' => 'text'),
    'Mail.ru' => array('name' => 'Mail.ru', 'substr' => '"^https?\:\/\/(\w+\.)?mail.ru\/search"', 'term' => 'q'),
    'qip.ru' => array('name' => 'qip.ru', 'substr' => '"^https?\:\/\/(\w+\.)?qip.ru\/search"', 'term' => 'query'),
    'Rambler' => array('name' => 'Rambler', 'substr' => '"^https?\:\/\/(www\.)?rambler.ru\/search"', 'term' => 'query'),
    'Facebook' => array('name' => 'Facebook', 'substr' => '"^https?\:\/\/(www\.)?facebook.com\/"'),
    'Google Adwords' => array('name' => 'Google Adwords', 'substr' => '"^https?\:\/\/(www\.)?google(\.\w+)+\/aclk\?"', 'term' => 'q'),
    'Google Search' => array('name' => 'Google Search', 'substr' => '"^https?\:\/\/(www\.)?google(\.\w+)+\/(\w+)?\?"'),
    'Google_Search' => array('name' => 'Google_Search', 'substr' => '"^https?\:\/\/(www\.)?google(\.\w+)+\/.*"'),
    'Bing' => array('name' => 'Bing', 'substr' => '"^https?\:\/\/(www\.)?bing.com\/search\?"', 'term' => 'q'),
    'VKontakte' => array('name' => 'VKontakte', 'substr' => '"^https?\:\/\/(www\.)?vk\.com\/"')
);

$newutm = 0;
$myhost = $_SERVER['HTTP_HOST'];
$utmdata = '';
$utm = 'нет';
$term = 'нет';

if(!empty($ref)) {
    foreach($referers as $r) {
        if(preg_match($r['substr'], $ref)) {
            $utm = $r['name'];
            $newutm = 1;
            break;
        }
    }
}
if($newutm) {
    //$term = 'нет';
    if(!empty($ref)) {
        if(isset($referers[$utm]) && isset($referers[$utm]['term'])) {
            $termstr = $referers[$utm]['term'];
            $s = preg_replace('/^.*\?(.*)$/', '$1', $ref);
            $a = explode('&', $s);
            foreach($a as $aa) {
                $ab = explode('=', $aa);
                if($ab[0] == $termstr) {
                    $term = rawurldecode($ab[1]);
					$term = str_replace("+", " ", $term);
                    break;
                }
            }
        }
    }
}
if(!empty($ref) && (!$newutm)) {
    $host = strtolower(parse_url($ref, PHP_URL_HOST));
    if (strpos($host, $myhost) === false) {
        $utm = $host;
        //$term = 'нет';
        $newutm = 1;
    }
}

if($newutm) {
    $t = date('Y-m-d H:i:s');
    $utmdata = $t.'&'.$utm.'&'.$term;
    setcookie('utmdata', $utmdata, time() + 60 * 60 * 24 * 30);
}
//GA
$aux = new GA_Parse($_COOKIE);

$ref_info = "";
$ref_info .= "IP: ".$ip."<br>\r\n";
$ref_info .= "Дата: ".$date."<br><br>\r\n";
$ref_info .= "Источник: ".$utm."<br>\r\n";
$ref_info .= "Ключевая фраза: ".$term."<br><br>\r\n";
//GA info
$ref_info .= "Campaign source: ".$aux->campaign_source."<br>\r\n";
$ref_info .= "Campaign name: ".$aux->campaign_name."<br>\r\n";
$ref_info .= "Campaign medium: ".$aux->campaign_medium."<br>\r\n";
$ref_info .= "Campaign content: ".$aux->campaign_content."<br>\r\n";
$ref_info .= "Campaign term: " .$aux->campaign_term."<br>\r\n";
$ref_info .= "Date of first visit: ".$aux->first_visit."<br>\r\n";
$ref_info .= "Date of previous visit: ".$aux->previous_visit."<br>\r\n";
$ref_info .= "Date of current visit: ".$aux->current_visit_started."<br>\r\n";
$ref_info .= "Times visited: ".$aux->times_visited."<br>\n";
$ref_info .= "Pages viewed current visit: ".$aux->pages_viewed."<br>\r\n";
$ref_info .= "REFERER: ".$ref."<br>\r\n";
?>