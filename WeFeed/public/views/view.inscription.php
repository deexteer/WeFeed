<main>
	<div class="inscription__container">

		<div class="inscription__form">

			<div class="inscription__form-header">
				<a href="index.php"><img src="app/images/logo.png" alt="Logo WeFeed"></a>
			</div>
			<?php echo flash('register_success'); ?>
			<form method="POST" action="index.php?req=inscription">
				<div class="inscription__form-title"><?= INSCRIPTION_TITLE ?></div>
				<input class="inscription__form-inputs" type="text" id="pseudo" name="pseudo" placeholder="<?= INSC_PSEUDO_INPUT ?>" value="<?php if(isset($pseudo)) { echo $pseudo ;} ?>"/>
			    <br />
			    <input class="inscription__form-inputs" type="email" id="mail1" name="mail1" placeholder="<?= INSC_MAIL_INPUT ?>" value="<?php if(isset($mail1)) { echo $mail1 ;} ?>" />
			    <br />
			    <input class="inscription__form-inputs" type="email" id="mail2" name="mail2" placeholder="<?= INSC_CONFIRM_MAIL_INPUT ?>" value="<?php if(isset($mail2)) { echo $mail2 ;} ?>" />
			    <br />
			    <input class="inscription__form-inputs" type="password" id="mdp1" name="mdp1" placeholder="<?= INSC_PASSWORD_INPUT ?>" />
			    <br />
			    <input class="inscription__form-inputs" type="password" id="mdp2" name="mdp2" placeholder="<?= INSC_CONFIRM_PASSWORD_INPUT ?>" />
			    <br />
			    <input class="btn" type="submit" name="form_inscription" value="<?= INSCRIPTION_BUTTON ?>" />
			    <br />
				<?php if(isset($_POST['form_inscription'])) { echo $message; } ?>
			    <p class="inscription__form-regconlinks"><a class="other" href="connexion"><?= CONNEXION_PAGE_REDIRECTION ?></a></p>

			</form>
		</div>

	</div>
</main>
