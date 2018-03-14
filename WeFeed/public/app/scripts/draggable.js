// Abdellah SAQ - Jquery UI dragabble elements

$(document).ready(function() { // begin document ready
	
	// Nous sert a changé le positionnement dans le view
	$('#list-items').sortable({
		update: function() {
			var data = $('#list-items').sortable("serialize");
		}
	});

// On peut changer le style des élements ici
$('li').on('mouseover',function() {
$(this).css(
	{
		'backgroundColor' : 'black',
		'color' : 'white'
	}
);
}).on('mouseout' ,function() {
	$('li').css(
		{
			'backgroundColor' : '',
			'color' : ''
		}
	)
});

});