<?php
### Referals script start
error_reporting(0);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'error.log');

$debug = 1;
$referers = array(
    'Yandex Direct' => array('name' => 'Yandex Direct', 'substr' => '"^https?\:\/\/(direct\.)?yandex\.\w+\/search"', 'term' => 'text'),
    'Yandex Search' => array('name' => 'Yandex Search', 'substr' => '"^https?\:\/\/(www\.)?yandex\.\w+\/(.*)from=yandex\.\w+\%3byandsearch\%"', 'term' => 'text'),
    'Yandex_Search' => array('name' => 'Yandex_Search', 'substr' => '"^https?\:\/\/(www\.)?yandex\.\w+\/yandsearch\?"', 'term' => 'text'),
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

if ($debug)
    $lf = fopen(dirname(__FILE__) . '/' . 'debug.log', 'a');

function writelog($s)
{
    global $lf, $debug;
    if ($debug)
        fputs($lf, "$s\n");
}

$myhost = 'shapoushki.org';
//----------------------------------------- Указать DOMEN
$t = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$utmdata = '';
$referer = isset($_SERVER['HTTP_REFERER']) ? strtolower(trim($_SERVER['HTTP_REFERER'])) : '';
//$utm=isset($_GET['utm_source']) ? strtolower(trim($_GET['utm_source'])) : '';
//$term=isset($_GET['utm_term']) ? strtolower(trim($_GET['utm_term'])) : '';
$utm = 'нет';
$term = 'нет';

writelog("\nSession started (index.php) at '$t', IP='$ip', Referer='$referer'");
writelog("Cokies: " . print_r($_COOKIE, true));
writelog("REQUEST: " . print_r($_REQUEST, true));

if (isset($_COOKIE['utmdata'])) {
    writelog("Found saved cookie UTMdata");
    $utmdataexp = explode('&', $_COOKIE['utmdata']);
    if (count($utmdataexp) >= 2 && !empty($utmdataexp[0]) && !empty($utmdataexp[1])) {
        $t = $utmdataexp[0];
        $utm = $utmdataexp[1];
        $term = $utmdataexp[2];
        $utmdata = $t . '&' . $utm . '&' . $term;
    }
}
$newutm = 0;
if (!empty($referer)) {
    foreach ($referers as $ref) {
        writelog("Checking " . $ref['substr'] . " in $referer...");
        if (preg_match($ref['substr'], $referer)) {
            $utm = $ref['name'];
            writelog("Found substr for $utm...");
            $newutm = 1;
            break;
        }
    }
}
if ($newutm) {
    $term = 'нет';
    if (!empty($referer)) {
        if (isset($referers[$utm]) && isset($referers[$utm]['term'])) {
            $termstr = $referers[$utm]['term'];
            writelog("Processing term for $utm...");
            $s = preg_replace('/^.*\?(.*)$/', '$1', $referer);
            $a = explode('&', $s);
            foreach ($a as $aa) {
                $ab = explode('=', $aa);
                if ($ab[0] == $termstr) {
                    $term = rawurldecode($ab[1]);
                    writelog("Found term '$term'");
                    break;
                }
            }
        }
    }
}
if (!empty($referer) && (!$newutm)) {
    $host = strtolower(parse_url($referer, PHP_URL_HOST));
    if (strpos($host, $myhost) === false) {
        $utm = $host;
        $term = 'нет';
        $newutm = 1;
    }
}

if ($newutm) {
    $t = date('Y-m-d H:i:s');
    writelog("Newutm: writing new UTM data...");
    $utmdata = $t . '&' . $utm . '&' . $term;
    setcookie('utmdata', $utmdata, time() + 60 * 60 * 24 * 30);
}
writelog("UTM Data: $utmdata");
writelog("Session finished\n");
#### Referelas Script End

//------------------------------------------------------------Это надо вставить В Post перед $body

### Referals script start
$message .= "Источник: $utm" . $eol;
$message .= "Ключевая фраза: $term" . $eol;
### Referals script end