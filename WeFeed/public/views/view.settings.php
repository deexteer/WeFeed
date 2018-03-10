<script>
    var all_apis = <?php echo json_encode($result, JSON_HEX_TAG); ?>;
</script>
<div class="settings">
	<div class="panel">
		<div class="panel__header">
			<h1>Paramètres</h1>
		</div>
		<form class="" action="index.html" method="post">
			<div class="panel__left-side">
				<div class="panel__draggable">
					Le monde
				</div>
				<div class="panel__draggable">
					Le parisien
				</div>
				<div class="panel__draggable">
					lorem
				</div>
				<div class="panel__draggable">
					lorem
				</div>
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
