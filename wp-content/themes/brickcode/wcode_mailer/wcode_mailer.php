<?php

/*
	This Plugin require Boostrap in page
*/

require 'PHPMailerAutoload.php';


function wcode_mail($quien, $nombreQuien, $recibe, $nombreRecibe){

	if( isset($_POST) && count($_POST) ){

		$mail = new PHPMailer;

		$mail->setFrom($quien, $nombreQuien);

		$mail->addAddress($recibe, $nombreRecibe);

		$mail->Subject = 'Mensaje MACREPSA Contacto';

		$mail->IsHTML(true);

		$contenido = "";

		foreach ($_POST as $key => $value)	$contenido .= ucfirst($key).": ".$value." <br>";

		$mail->Body = $contenido;

		if (!$mail->send()) {
			echo '
			<!-- Login Modal -->
			<div id="x-lightbox" class="pt-50 pb-50 hide">
				<div class="row">
					<div class="column width-12 left">
						<div class="login-form-container">
							<div class="thumbnail mb-0" style="text-align:center;">
								<img src="images/Home/logoMacrepsa.png" width="200" alt="" />
							</div>
							<p class="mb-30">Tu mensaje no se pudo enviar, intenta nuevamente.</p>
							<div class="form-response"></div>
						</div>
					</div>
				</div>
			</div>

			<a id="botonnoenviado" style="display: none;" data-content="inline" data-modal-mode data-modal-width="600" href="#x-lightbox" class="lightbox-link button no-label-on-mobile small pull-right no-margin-bottom"></a>

			<!-- Login Modal End -->
			<script>
			$( document ).ready(function() {
				$("#botonnoenviado").click();
			});
			</script>
			';
			return false;
		} else {
			echo '
			<!-- Login Modal -->
			<div id="xe-lightbox" class="pt-50 pb-50 hide">
				<div class="row">
					<div class="column width-12 left">
						<div class="login-form-container">
							<div class="thumbnail mb-0" style="text-align:center;">
								<img src="images/Home/logoMacrepsa.png" width="200" alt="" />
							</div>
							<p style="text-align: center;" class="mb-30">Tu mensaje se envio correctamente.</p>
							<div class="form-response"></div>
						</div>
					</div>
				</div>
			</div>

			<a id="botonenviado" style="display: none;" data-content="inline" data-modal-mode data-modal-width="600" href="#xe-lightbox" class="lightbox-link button no-label-on-mobile small pull-right no-margin-bottom"></a>

			<!-- Login Modal End -->
			<script>
			$( document ).ready(function() {
				$("#botonenviado").click();
			});
			</script>
			';
			return true;

		}
	}
}



?>
