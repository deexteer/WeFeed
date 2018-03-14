<body>
<main>
	<div class="connexion__container">

		<div class="connexion__form">

			<div class="connexion__form-header">
				<a href="index.php"><img class="floating" src="app/images/logo.png" alt="Logo WeFeed"></a>
			</div>
			<?php echo flash('register_success'); ?>
			<form method="POST" action="index.php?req=connexion">
				<div class="connexion__form-title"><?= CONNEXION_TITLE ?></div>
				<input class="connexion__form-inputs" type="email" id="mailconnect" name="mailconnect" placeholder="<?= CON_MAIL_INPUT ?>" />
				<br />
				<input class="connexion__form-inputs" type="password" id="mdpconnect" name="mdpconnect" placeholder="<?= CON_PASSWORD_INPUT ?>" >
				<br />
				<input class="btn" type="submit" name="form_connexion" value="<?= CONNECT_BUTTON ?>" />
				<br />
				<?php if(isset($_POST['form_connexion'])) { echo $message; } ?>
				<p class="connexion__form-regconlinks"><a class="other" href="inscription"><?= INSCRIPTION_PAGE_REDIRECTION ?></a></p>
			</form>
		</div>

	</div>
</main>
