<body>
<main>
	<div class="connexion__container">

		<div class="connexion__form">

			<div class="connexion__form-header">
				<a href="index.php"><img src="app/images/logo.png" alt="Logo WeFeed"></a>
			</div>
			<?php echo flash('register_success'); ?>
			<form method="POST" action="index.php?req=connexion">
				<div class="connexion__form-title">Connexion</div>
				<input class="connexion__form-inputs" type="email" id="mailconnect" name="mailconnect" placeholder="Votre mail" />
				<br />
				<input class="connexion__form-inputs" type="password" id="mdpconnect" name="mdpconnect" placeholder="Mot de passe" >
				<br />
				<input class="btn" type="submit" name="form_connexion" value="Se connecter" />
				<br />
				<?php if(isset($_POST['form_connexion'])) { echo $message; } ?>
				<p class="connexion__form-regconlinks"><a class="other" href="inscription">Pas de compte ? Inscrivez-vous !</a></p>
			</form>
		</div>

	</div>
</main>
