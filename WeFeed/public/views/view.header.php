<header class="header">

	<!-- Logo  -->
	<div class="header__container float-left">
		<a href="publichome"><img class="header__logo" src="app/images/logo.png" alt="Logo WeFeed"></a>
	</div>

	<!-- Searchbar -->
	<div class="header__container float-left">
		<?php if($_GET['req'] !== "search"): ?>
			<form class="form__searchbar" action="search" method="post">
				<input class="header__searchbar" type="text" name="search" placeholder=<?= SEARCHBAR_TEXT ?>>
			</form>
		<?php endif ?>

	</div>

	<div class="header__container float-right">
	<?php if (isset($_SESSION['id'])): ?>

		<!-- Utilisateur connecté -->
		<div class="header__user-is-connected  float-left"><?= TXT_CONNECTED_AS ?><?= $_SESSION['pseudo'] ?></div>

		<?php if($_GET['req'] == "publichome"): ?>
			<div class="header__icons float-left"><a href="userhome" ><img src="app/images/icons/dashboard.png" alt="Icone dashboard" /></a></div>
		<?php endif ?>

		<?php if($_GET['req'] == "userhome"): ?>
			<div class="header__icons float-left"><a href="publichome" ><img src="app/images/icons/home.png" alt="Icone home" /></a></div>
			<div class="header__icons float-left"><a href="settings" ><img src="app/images/icons/settings.png" alt="Icone settings" /></a></div>
		<?php endif ?>

		<?php if($_GET['req'] == "settings"): ?>
			<div class="header__icons float-left"><a href="userhome" ><img src="app/images/icons/dashboard.png" alt="Icone dashboard" /></a></div>
		<?php endif ?>

		<div class="header__icons  float-left"><a href="disconnect" ><img src="app/images/icons/logout.png" alt="Icone logout" /></a></div>

	<?php else: ?>

		<!-- Utilisateur non connecté -->
		<div class="header__button"><a href="connexion"><?= BTN_CONNECTION ?></a></div>
		<div class="header__button"><a href="inscription"><?= BTN_INSCRIPTION ?></a></div>

	<?php endif ?>

		<div class="header__icons float-left language-selector">
			<form class="" action="publichome" method="post">
				<select name="lang" onchange="this.form.submit()">

					<option></option>
					<option value="fr">Francais</option>
					<option value="en">Anglais</option>
					<option value="bl">Bulgare</option>
				</select>
			</form>
		</div>


	</div>
</header>
