<header class="header">

	<!-- Logo  -->
	<div class="header__container float-left">
		<a href="publichome"><img class="header__logo" src="app/images/logo.png" alt="Logo WeFeed"></a>
	</div>

	<!-- Searchbar -->
	<div class="header__container float-left">
		<form class="form__searchbar" action="index.php" method="post">
			<input class="header__searchbar" type="text" name="search" placeholder="Rechercher">
		</form>
	</div>

	<div class="header__container float-right">
	<?php if (isset($_SESSION['id'])): ?>

		<!-- Utilisateur connecté -->
		<div class="header__user-is-connected  float-left">Connecté en tant que <?= $_SESSION['pseudo'] ?></div>
		<div class="header__icons float-left"><a href="userhome" ><img src="app/images/icons/dashboard.png" alt="Icone dashboard" /></a></div><!-- ======= Abdellah SAQ - Modification lien  -->
		<div class="header__icons  float-left"><a href="disconnect" ><img src="app/images/icons/logout.png" alt="Icone logout" /></a></div><!-- ======= Abdellah SAQ - Modification lien  -->

	<?php else: ?>

		<!-- Utilisateur non connecté -->
		<div class="header__button"><a href="connexion">Se connecter</a></div>  <!-- ======= Abdellah SAQ - Modification lien  -->
		<div class="header__button"><a href="inscription">S'inscrire</a></div><!-- ======= Abdellah SAQ - Modification lien  -->

	<?php endif ?>
	</div>
</header>
