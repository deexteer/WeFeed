
//Chnage le background du header quand l'utilisateur scroll vers le bas
window.onscroll = function() {changeBackHeader()};
function changeBackHeader() {
	if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        $( ".header" ).addClass( "header-flying" )
    } else {
        $( ".header" ).removeClass( "header-flying" )
    }
}

$('.articl').mouseenter(function(){
	$('.article__image').animate({
		backgroundSize: '110%'
	}, 100);
	$('.article').css('background-color', 'rgba(158, 158, 158, 0.7)');
});
$('.article').mouseleave(function(){
	$('.article').css('background-color', '#fff');
	$('.article__image').animate({
		backgroundSize: '100%'
	}, 100);
});
