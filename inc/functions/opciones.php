<?php

    add_action('admin_menu', 'iv_script');

	function iv_script(){
		add_menu_page('Invitro Agencia Digital', 'Redes Sociales', 'administrator', 'iv_script', 'iv_opciones', '', 20);

		//llamar al registro de las opciones de nuestro tema
		
		add_action('admin_init', 'iv_registrar_opciones_contacto');
	}

	function iv_registrar_opciones_contacto() {
		//Registrar opciones, una por campo
		
		register_setting('koller_opciones_grupo_contacto', 'nro_1');
		register_setting('koller_opciones_grupo_contacto', 'direccion');
		register_setting('koller_opciones_grupo_contacto', 'maps');
		register_setting('koller_opciones_grupo_contacto', 'correo');
		
		register_setting('koller_opciones_grupo_contacto', 'whatsapp');
		register_setting('koller_opciones_grupo_contacto', 'facebook');
		register_setting('koller_opciones_grupo_contacto', 'instagram');
		register_setting('koller_opciones_grupo_contacto', 'twitter');
		register_setting('koller_opciones_grupo_contacto', 'linkedin');
		register_setting('koller_opciones_grupo_contacto', 'tiktok');
		
	}

	function iv_opciones(){
		?>
			<div class="wrap">
				<form method = "post" action = "options.php"> 
					<?php settings_fields('koller_opciones_grupo_contacto'); ?>
					<?php do_settings_sections('koller_opciones_grupo_contacto'); ?>
				    <h1>Información de contacto</h1>
				    <br>
				    
				    <table class="form-table">
				        
				        <tr valign="top">
							<th scope="row" style="padding:0 0 16px 0;vertical-align:middle;">Whatsapp</th>
							<td style="padding:0 0 16px 0"><input style="width: 100%;" type="text" name="whatsapp" value="<?php echo get_option('whatsapp'); ?>"></td>
						</tr>
					    <tr valign="top">
							<th scope="row" style="padding:0 0 16px 0;vertical-align:middle;">Facebook</th>
							<td style="padding:0 0 16px 0"><input style="width: 100%;" type="text" name="facebook" value="<?php echo get_option('facebook'); ?>"></td>
						</tr>
						<tr valign="top">
							<th scope="row" style="padding:0 0 16px 0;vertical-align:middle;">TikTok</th>
							<td style="padding:0 0 16px 0"><input style="width: 100%;" type="text" name="tiktok" value="<?php echo get_option('tiktok'); ?>"></td>
						</tr>
						<tr valign="top">
							<th scope="row" style="padding:0 0 16px 0;vertical-align:middle;">Instagram</th>
							<td style="padding:0 0 16px 0"><input style="width: 100%;" type="text" name="instagram" value="<?php echo get_option('instagram'); ?>"></td>
						</tr>
						<tr valign="top">
							<th scope="row" style="padding:0 0 16px 0;vertical-align:middle;">Twitter</th>
							<td style="padding:0 0 16px 0"><input style="width: 100%;" type="text" name="twitter" value="<?php echo get_option('twitter'); ?>"></td>
						</tr>
						<tr valign="top">
							<th scope="row" style="padding:0 0 16px 0;vertical-align:middle;">LinkedIn</th>
							<td style="padding:0 0 16px 0"><input style="width: 100%;" type="text" name="linkedin" value="<?php echo get_option('linkedin'); ?>"></td>
						</tr>
						
					</table>
					<hr><br>
					<table class="form-table">
						
						<tr valign="top">
							<th scope="row" style="padding:0 0 16px 0;vertical-align:middle;">Dirección</th>
							<td style="padding:0 0 16px 0"><input style="width: 100%;" type="text" name="direccion" value="<?php echo get_option('direccion'); ?>"></td>
						</tr>
						<tr valign="top">
							<th scope="row" style="padding:0 0 16px 0;vertical-align:middle;">Enlace Google Maps</th>
							<td style="padding:0 0 16px 0"><input style="width: 100%;" type="text" name="maps" value="<?php echo get_option('maps'); ?>"></td>
						</tr>
						
						<tr valign="top">
							<th scope="row" style="padding:0 0 16px 0;vertical-align:middle;">Número (1)</th>
							<td style="padding:0 0 16px 0"><input style="width: 100%;" type="text" name="nro_1" value="<?php echo get_option('nro_1'); ?>"></td>
						</tr>
						<tr valign="top">
							<th scope="row" style="padding:0 0 16px 0;vertical-align:middle;">Correo</th>
							<td style="padding:0 0 16px 0"><input style="width: 100%;" type="text" name="correo" value="<?php echo get_option('correo'); ?>"></td>
						</tr>
						
					</table>
					
					<br>
					<?php submit_button (); ?>
				</form>
			</div>
		<?php
	}
?>