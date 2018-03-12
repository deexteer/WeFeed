<div class="settings">
	<div class="panel">

		<div class="panel__header">
			<h1>Paramètres</h1>
		</div>

		<form class="panel__form" action="userhome" method="post">
			<div class="panel__left-side">
				<p>Ajouter des sources :</p>
				<select class="panel__input" name="api">
					<option value=""></option>
					<?php print_r($result) ?>
					<?php foreach ($result as $key => $value) {
						echo "<option id=".$value['api_id'].">".$value['api_name']."</option>";
					} ?>

				</select>
			</div>
			<div class="panel__right-side">
				<label for="">Changer de pseudo :</label><br/>
				<input class="panel__input" type="text" name="pseudo" value=<?= $_SESSION['pseudo'] ?>><br/>
				<label for="">Changer de mail :</label><br/>
				<input class="panel__input" type="text" name="mail" value=<?= $_SESSION['mail'] ?>><br/>
			</div>
			<div class="panel__footer">
				<input class="btn" type="submit" name="form_settings" value="Valider">
			</div>
		</form>

	</div>
</div>
