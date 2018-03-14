<div class="userhome">
	<div class="newsfeed_container">
		<!-- Il n'y a pas de contenu ici puisqu'il est géné avec le js -->
	</div>
</div>
<div class="forms">

	<div class="popup__background">

		<div class="form__deletecolumns">
			<div class="form__deletecolumns-close">

			</div>
			<form class="delcol" action="userapis" method="post">
				<input name="coltodel" type="hidden" value="">
				<div class="popup__delcol">
					<p><?php echo POPUP_MESSAGE_DELCOL ?></p>
					<input class="btn" type="submit" value="Supprimer">
				</div>
			</form>
		</div>

	</div>


</div>
<script src="app/scripts/data.js" charset="utf-8"></script>
<script src="app/scripts/apis.js" charset="utf-8"></script>
