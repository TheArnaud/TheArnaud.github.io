<div id="corps">
	<div id="titre">
		Inscriptions SCIENCES PO
	</div>
	<div class="flex">

	<?php
	include('pages/sesame/sesame/menu.php');
	?>
	<div class="contenirSESAME">
	<div class="testo">
	<div id="acm-gauche" style="border-right: 1px solid #000">
	<form action="action_page.php">
  <div class="container">

    <p>Afin de vous adresser les modalités d'inscription, veuillez saisir svp vos coordonnées dans le formulaire ci dessous.<br><br>
		Vous pouvez également nous joindre par téléphone au 01.45.24.40.40</p>
    <hr>

	<label for="email"><b>Nom :</b></label>
    <input type="text" placeholder="Votre nom" name="email" id="email" required>

	<label for="email"><b>Prénom :</b></label>
    <input type="text" placeholder="Votre prénom" name="email" id="email" required>

    <label for="email"><b>Mail :</b></label>
    <input type="text" placeholder="Votre email" name="email" id="email" required>

    <label for="email"><b>Téléphone :</b></label>
    <input type="text" placeholder="Votre numéro de téléphone" name="email" id="email" required>

	<label for="subject">Laissez nous un message</label><br>
    <textarea id="subject" name="subject" placeholder="Écrivez quelque chose.."></textarea>

   
    <button type="submit" class="registerbtn">Envoyer</button>
  </div>
    </form>
	</div>
	<div id="acm-droite" style="text-align:center; padding-left:20px;">
		<img src="img/resultatSP.jpg" alt="" style="position:relative; top:30px; width:350px; border: 1px solid #880000; 
    border-radius: 8px; "/>
	</div>
	</div>
	</div>
	</div>
</div>
