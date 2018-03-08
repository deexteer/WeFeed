<main>
	<div class="inscription__container">

		<div class="inscription__form">

			<div class="inscription__form-header">
				<a href="index.php"><img src="app/images/logo.png" alt="Logo WeFeed"></a>
			</div>
			<?php echo flash('register_success'); ?>
			<form method="POST" action="index.php?req=inscription">
				<div class="inscription__form-title">Inscription</div>
				<input class="inscription__form-inputs" type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo" value="<?php if(isset($pseudo)) { echo $pseudo ;} ?>"/>
			    <br />
			    <input class="inscription__form-inputs" type="email" id="mail1" name="mail1" placeholder="Votre mail" value="<?php if(isset($mail1)) { echo $mail1 ;} ?>" />
			    <br />
			    <input class="inscription__form-inputs" type="email" id="mail2" name="mail2" placeholder="Confirmez votre mail" value="<?php if(isset($mail2)) { echo $mail2 ;} ?>" />
			    <br />
			    <input class="inscription__form-inputs" type="password" id="mdp1" name="mdp1" placeholder="Mot de passe" />
			    <br />
			    <input class="inscription__form-inputs" type="password" id="mdp2" name="mdp2" placeholder="Confirmez votre mot de passe" />
			    <br />
			    <input class="inscription__form-sub-button" type="submit" name="form_inscription" value="S'inscrire" />
			    <br />
				<?php if(isset($_POST['form_inscription'])) { echo $message; } ?>
			    <p class="inscription__form-regconlinks"><a class="other" href="connexion">Déjà inscrit ? Connectez-vous !</a></p>

			</form>
		</div>

	</div>
</main>
