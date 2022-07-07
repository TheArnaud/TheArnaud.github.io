<div id="corps">
	<div id="titre">
		Brochure
	</div>
<?php
	include('pages/sciencespo/concours/menu.php');
?>
	<div id="ssm-gauche">
		<p>
			Veuillez remplir le formulaire suivant afin de recevoir notre brochure concernant notre préparation SCIENCES PO.
		<br><br>
			<b>Pour vérifier les disponibilités d’inscription, merci de nous contacter au 01.45.24.40.40</b>.
		</p>
		
		<form method='post' action='modules/mail.php'>
			<fieldset>
				<legend> Vos coordonnées </legend>
				<label for='nom'>Nom :</label> <input type='text' name='nom' id='nom' required /><span style="color:#ff0000">*</span>
				<br /><br />
				<label for='prenom'>Prénom :</label> <input type='text' name='prenom' id='prenom' required /><span style="color:#ff0000">*</span>
				<br /><br />
				<label for='mail'>Mail :</label> <input type='email' name='mail' id='mail' required /><span style="color:#ff0000">*</span>
				<br /><br />
				<label for='tel'>Téléphone :</label> <input type='tel' name='tel' id='tel' required /><span style="color:#ff0000">*</span>
				<input type="hidden" name="dest" value="contact.spo1@pc-es.fr" />
				<input type="hidden" name="type" value="brochure" />
				<p style="font-size:10pt">
					Les champs marqués d'une <span style="color:#ff0000">*</span> sont obligatoires.
				</p>
			</fieldset>
			<fieldset>
				<legend> Laissez nous un message </legend>
				<input type="text" name="message" style="width:100%; height:100px;" />
				<br /><br />
				<input type="submit" value="Envoyer" />
			</fieldset>
		</form>
	</div>
	<div id="ssm-droite">
		
	</div>
</div>

