<!-- Form newsletter (template) -->
				<!-- Autore: Marco Pavan - pavan.marco@email.it -->
				<!-- Data: 28 sett 2010 -->
				<form id="form_newsletter" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
					<fieldset>	
						<legend>Newsletter</legend>	
						<p><label for="email_newsletter">Iscriviti inserendo la tua e.mail</label><br />
						<input id="email_newsletter" type="text" name="email_newsletter" size="12" title="E-mail per iscriversi alla newsletter" /></p>
						<!--<p><label for="message">Messaggio</label><br />
						<textarea name="message" rows="5" cols="15" >Inserisci eventuali altre note...</textarea></p>-->
						<p><input type="hidden" name="form" value="email" />
						<input type="hidden" name="check" value="<?php echo $check; ?>" />
						<input type="submit" name="submit_newsletter" value="Invia" /></p>
					</fieldset>
				</form>
				<!-- fine newsletter (template) -->
