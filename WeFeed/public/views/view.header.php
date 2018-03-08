<header class="header">

	<!-- Logo  -->
	<div class="header__container float-left">
		<a href="index.php"><img class="header__logo" src="app/images/logo.png" alt="Logo WeFeed"></a>
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
		<div class="header__icons float-left"><a href="index.php?req=userhome" ><img src="app/images/icons/dashboard.png" alt="Icone dashboard" /></a></div>
		<div class="header__icons  float-left"><a href="index.php?req=disconnect" ><img src="app/images/icons/logout.png" alt="Icone logout" /></a></div>

	<?php else: ?>

		<!-- Utilisateur non connecté -->
		<div class="header__button"><a href="index.php?req=connexion">Se connecter</a></div>
		<div class="header__button"><a href="index.php?req=inscription">S'inscrire</a></div>

	<?php endif ?>
	</div>
</header>
