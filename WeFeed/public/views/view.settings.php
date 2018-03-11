<?php


?>

<div class="settings">
	<div class="panel">

		<div class="panel__header">
			<h1>Paramètres</h1>
		</div>

		<form class="panel__form" action="userhome" method="post">
			<div class="ok">

			</div>
			<div class="panel__left-side">
				<select class="panel__api-selector" name="api">
					<option value=""></option>
					<?php foreach ($result as $key => $value) {
						echo "<option id=".$value['api_id'].">".$value['api_name']."</option>";
					} ?>

				</select>
			</div>
			<div class="panel__right-side">
				lorem
			</div>
			<div class="panel__footer">
				<input class="panel__footer-submit" type="submit" name="form_settings" value="Valider">
			</div>
		</form>

	</div>
</div>




<!-- Category -->
<!--
Sport
Politique
General
-->
