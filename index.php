<?php
error_reporting(0);
echo " HAPPY LOOTING!! \n";
unlink('cookie.txt');




$rd = rand(111,999);
$us = "Mozilla/5.0 (Linux; Android 13; SM-G".$rd."1U) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36";
$vvv = $us;

function ofer($url, $method, $data = null) {
	global $vvv;
    $header = array(
        "Host: excentiv.com",
        "content-type: application/x-www-form-urlencoded",
        "user-agent: ".$vvv.""
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
    curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function batt($url, $method, $data = null) {
	global $vvv;
    $header = array(
        "Host: coins-battle.com",
        "upgrade-insecure-requests: 1",
        "content-type: application/x-www-form-urlencoded",
        "X-Requested-With: XMLHttpRequest",
        "user-agent: ".$vvv.""
    );
    //$proxy = 'http://jmdzpqpq:imrbe2ogb5md@2.56.119.93:5074';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
    curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}


function curl($url, $method, $data = null) {
	global $vvv;
    $header = array(     
         
        "Content-Type: application/json",
        "User-Agent: ".$vvv.""
    );
    $proxy = 'socks5://rdzodklp:k03ozi73qer9@185.199.229.156:7492';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);       
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function cap($url, $method, $data = null) {
	global $vvv;
    $header = array(        
        
        "Content-Type: application/json",
        "User-Agent: ".$vvv.""
    );
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
      
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$hh="625";
xx:
if($hh=="637"){echo "Complete!!! \n";sleep(99999);}
//$url = "https://excentiv.com/offerwall?userid=91067&key=AB9G6WLUvRfwcI4YtPxF";
$url = "https://excentiv.com/offerwall/?userid=65c8b6bd052b93ae090f4333&key=z87NyZ93HKns2lcTXFRp";
$of = ofer($url, 'GET');
if (strpos($of, "Games") === false) {echo" Game Hilang \n";sleep(99999);}

sleep(5);
$tokk = explode('"',explode('<button value="https://coins-battle.com?token=', $of)[1])[0];
if($tokk==""){sleep(3);goto xx;}
$url = "https://coins-battle.com/?token=".$tokk."";
$bat = batt($url, 'GET');


while(true):
$url = "https://coins-battle.com/game/play/".$hh."";
$btc = batt($url, 'GET');
$sit = explode('"',explode('<div class="g-recaptcha" data-sitekey="', $btc)[1])[0];
$idd = explode('">',explode('<input type="hidden" name="game_id" value="', $btc)[1])[0];
$csf = explode('">',explode('<input type="hidden" name="csrf_token" value="', $btc)[1])[0];
$tim = explode("';",explode("let ctimer = '", $btc)[1])[0];
$lef = explode(' today',explode('<p><b>You have already play ', $btc)[1])[0];
if($idd==""){goto xx;}

a:
$url = "http://sctg.xyz/in.php?";
$data = array(
    'key' => '3AZ9DG7S3JvRITp5qaovctLQZIesH19w',
    'method' => 'userrecaptcha',
    'googlekey' => $sit,
    'json' => '1',
    'pageurl' => 'https://coins-battle.com/game/claimreward'
);
$datax = http_build_query($data);
$respo = cap($url, 'POST', $datax);
$re = json_decode($respo);
$id = $re->request;
if($id==''){goto a;}
$r = 1;

c:
$url = "http://sctg.xyz/res.php?key=3AZ9DG7S3JvRITp5qaovctLQZIesH19w&action=get&id=".$id."";
$res = curl($url, 'GET');
if ($res == 'CAPCHA_NOT_READY') {          
        sleep(6);
        goto c;
    }
if($res=="ERROR_CAPTCHA_UNSOLVABLE"){sleep(80);goto a;}

$captcha = str_replace("OK|", "", $res);


$url = 'https://coins-battle.com/game/claimreward';
$data = "game_id=".$idd."&csrf_token=".$csf."&captcha=recaptchav2&g-recaptcha-response=".$captcha."";
$las = batt($url, 'POST', $data);

$suc = explode(', to continue earning',explode('obtained', $las)[1])[0];
if($suc==""){goto xx;}
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i]", $timestamp);
echo"".$wak." ID [".$hh."] $suc \n";
sleep($tim);
if($lef=="29/30"){$hh=$hh+1;goto xx;}
endwhile;
?>