
//Chnage le background du header quand l'utilisateur scroll vers le bas
window.onscroll = function() {changeBackHeader()};
function changeBackHeader() {
	if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        $( ".header" ).addClass( "header-flying" )
    } else {
        $( ".header" ).removeClass( "header-flying" )
    }
}
