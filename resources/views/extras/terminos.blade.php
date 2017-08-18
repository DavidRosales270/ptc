@extends('layouts.home')

@section('content')
<div class="text-info">
    	@if(Session::has('message'))
        	{{Session::get('message')}}
    	@endif
</div>
<?php 
	
?>

<div style="position: relative;  margin: 0; padding: 0; ">
	<div style="display: inline-block; vertical-align: middle; width: 100%;  margin: 0; padding: 0; ">
    		{!! csrf_field() !!}
			<div class="terms" style="margin: 20px; font-size:12px;"  >
				<img src="../public/imgs/terms.jpg" style="width: 100%" />
				<h1 style="color: #e10019; font-size:24px; font-weight: bold">Términos del servicio</h1>
				<hr style="border: 2px solid red; padding: 0; margin: 0; background-color: red; " /><br />
				
				<p>Este Acuerdo de Membresía entre Usted (Miembro, Usuario o Anunciante) y <b>Niulinx.com.</b></p>

				<p class="subline" style="text-decoration: underline ">
					Al registrarse debe leer atentamente, comprender y aceptar los términos y condiciones de este acuerdo de membresía marcando la casilla <b>"Declaro haber leído, comprendido y aceptado los Términos de servicio"</b>.
				</p>

				<p>Si no está de acuerdo con todos los términos y condiciones de este acuerdo entonces no se debe registrar.</p>

				<h2>1) Términos de usuarios.</h2>

				<ul>
					<li>1.1) Los usuarios que se registren y dentro de los primeros 15 días calendario no hacen clic en ningún anuncio su cuenta será suspendida permanentemente y deberá crear una nueva.</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1.1) Si en tal caso, en su cuenta había depositado dinero sin embargo hizo lo mencionado en el punto “1.1” perderá el dinero sin derecho a ser rembolsado.</li>
					<li>1.2) Los usuarios que se registren con información falsa la cuenta será suspendida permanentemente sin derecho a ser reactivada</li>
					<li>1.3) Cada intento de hackear o abusar de nuestro sistema resultará en la suspensión de la cuenta permanentemente.</li>
					<li>1.4) Tener un nombre de usuario que consideremos inapropiado puede dar lugar a la suspensión de su cuenta sin previo aviso.</li>
					<li>1.5) Cada usuario solo puede ver el mismo anuncio cada 24 horas.</li>
					<li>1.6) Toda compra de paquete y upgrade de cuenta será mostrada con el signo de dólar “$”.</li>
					<li>1.7) Sólo puede tener una cuenta. Si intenta crear varias cuentas las mismas serán eliminadas. Si ha olvidado su información de usuario lo que debe hacer es restablecer la contraseña, de tener problemas por favor contacta con nosotros.</li>
					<li>1.8) Su información, como correo y contraseña no será vendida ni divulgada.</li>
					<li>1.9) No se modificará información de cuenta de los usuarios.</li>
					<li>1.10) Las cuentas no se le pueden transferir a una tercera persona.</li>
				</ul>

				<h2>2) Términos de referidos.</h2>

				<ul>
					<li>Puede tener la cantidad de referidos que desee "Dependiendo el tipo de cuenta que tenga"</li>
					<li>2.2) Un referido no puede cambiar al usuario que lo refirió.</li>
					<li>Lo que ganara por sus referidos dependerá del tipo de cuenta que tenga, puede verificar los detalles en la sección de upgrade de cuenta.</li>
				</ul>

				<h2>3)	Términos de pagos a Niulinx.</h2>

				<ul>
					<li>3.1) Todos los pagos se realizarán utilizando los enlaces disponibles. De haber alguna otra opción se les va a notificar por correo o en el foro.</li>
					<li>3.2) Los pagos serán realizado por la plataforma de Stripe.com</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.2.1) No tenemos acceso a tu información de tarjeta de crédito, nos llegara un correo de confirmación indicando la compra de paquete o el upgrade de cuenta, toda la información está reservada en la plataforma de Stripe.com, por ende, está muy segura.</li>
					<li><b>3.3) Los pagos no son rembolsados.</b></li>
					<li>3.4) Todas las reclamaciones de sus pagos llevaran a la suspensión permanente de su cuenta. La información será evaluada conforme al inconveniente de reclamación.</li>
				</ul>

				<h2>4)	Términos de publicidad.</h2>

				<ul>
					<li>4.1) El sitio web no debe tener POPUP.</li>
					<li>4.2) El sitio web no debe contener ni promover ningún virus. </li>
					<li>4.3) El sitio web no debe contener NINGUNA solicitud tales como cuadros de diálogo de descarga o alertas de confirmación. </li>
					<li>4.4) El sitio web no debe contener materiales pornográficos, racistas, discriminatorios, vulgares, ilegales u otros materiales adultos de ningún tipo.</li>
					<li>4.5) <b>Si infringe alguna de estas normas el anuncio será rechazado inmediatamente</b>.</li>	
				</ul>

				<h2>5)	Términos de pago a los usuarios.</h2>

				<ul>
					<li>5.1) Los pagos serán realizado por medio de <b>Paypal, Payza y Google Wallet</b>.</li>
					<li>5.2) Los pagos se realizarán en un lapso de 5 días a un máximo de 7 días hábiles.</li>
					<li>5.3) El retiro mínimo para solicitar un pago seria de 2.00$</li>
					<li>5.4) Solo somos responsable de enviar el pago a la cuenta y procesador registrado, toda acción después de ser enviado el pago, debe tratarlo directo con el procesador.</li>
				</ul>

				<h2>6)	Términos de responsabilidad.</h2>

				<ul>
					<li>6.1) No nos hacemos responsable de ningún tipo de inconveniente que no tenga que con nuestra página <b>"Ejemplo: El servidor de su página se ha caído, problemas para utilizar el dinero recibido termino 5.4"</b>.</li>
					<li>6.2) Podemos cambiar, modificar, actualizar los términos de servicio "cambiar las tarifas, ofertas, beneficios".</li>
					<li>6.3) Nos reservamos el derecho de suspender su cuenta sin previo aviso si incumple algún punto estipulado anteriormente.</li>
				</ul>
			</div>
	</div>
	<br />
	<br />
</div>

<style>
	.terms h2 {
		font-size: 16px;
		font-weight: bold; 
	}
	.terms ul { list-style: none; padding: 5px;}
	.terms ul li { margin: 5px; padding: 0}
</style>

@stop