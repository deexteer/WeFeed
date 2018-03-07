<body>
<main>
	<div class="connexion__container">

		<div class="connexion__form">

			<div class="connexion__form-header">
				<a href="index.php"><img src="app/images/logo.png" alt="Logo WeFeed"></a>
			</div>

			<form method="POST" action="index.php?req=connexion">
				<div class="connexion__form-title">Connexion</div>
				<input class="connexion__form-inputs" type="email" id="mailconnect" name="mailconnect" placeholder="Votre mail" />
				<br />
				<input class="connexion__form-inputs" type="password" id="mdpconnect" name="mdpconnect" placeholder="Mot de passe" >
				<br />
				<input class="connexion__form-sub-button" type="submit" name="form_connexion" value="Se connecter" />
				<br />
				<p class="connexion__form-regconlinks"><a class="other" href="index.php?req=inscription">Pas de compte ? Inscrivez-vous !</a></p>
			</form>
		</div>

	</div>
</main>
