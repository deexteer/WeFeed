//Chnage le background du header quand l'utilisateur scroll vers le bas
window.onscroll = function() {changeBackHeader()};
function changeBackHeader() {
	if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        $( ".header" ).addClass( "header-flying" )
    } else {
        $( ".header" ).removeClass( "header-flying" )
    }
}

if(user_apis == 0){
	$('.newsfeed_container').html('<div class="newsfeed__message"><img class="newsfeed__message-img" src="app/images/nocolumns.png" alt="" /></div>');
}

for(var j = 0; j < user_apis.length; j++) {
	for(var i = 0; i < all_apis.length; i++) {
		if(user_apis[j] == all_apis[i].api_name){
			createFeeds(j, all_apis[i].api_name, all_apis[i].api_url)
		}
	}
}

function createFeeds(number, api_title, api_url){

	$('.newsfeed_container').append("<div class='newsfeed_column' id='"+api_title+"'><div class='newsfeed__header'><div class='newsfeed__title'>"+api_title+"</div><div class='newsfeed__delete-button'></div></div><div class='news newsfeed_number"+number+"'></div></div>");

	makeArequest(api_url, number)
}

function makeArequest(api_url, number){
	var ajax = new XMLHttpRequest();
	ajax.open("GET", api_url, true);
	ajax.send();
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200) {
			var data = ajax.responseText;
			var parsedJson = JSON.parse(data);
			var articles = parsedJson.articles;

			for(var i = 0 ; i<= articles.length; i++) {
				number = number.toString();
				$('.newsfeed_number'+number).append("<div class='article'><a target='_blank' href="+articles[i].url+"><img src='"+articles[i].urlToImage+"' width='100%'><div class='article__title'><p>"+articles[i].title+"</p></div><div class='article__preview'><p>"+articles[i].description+"</p></div></a><div class='article__actions'><div class='article__button-like'></div><div class='article__button-fav'></div></div></div>");
			}
		}
	}
}


$(document).on('click',".article__button-fav",function () {
	var art = $(this).parent().parent();
	var art_url = art.find("a").attr('href');
	var art_urlToImage = art.find("img").attr('src');
	var art_title = art.find(".article__title").text();
	var art_preview = art.find(".article__preview").text();

	$.ajax({
	    data: {art_url:art_url, art_urlToImage:art_urlToImage, art_title:art_title, art_preview:art_preview },
	    type: "POST",
	    url: "models/ajax/mdl.ajax.php",
	    success: function(art_data){
	    	alert("Data sended" + art_data);
		}
	});
});

$('.form__deletecolumns-close').click(function(){
	$('.popup__background').hide();
	$('.form__deletecolumns').hide();
});

$('.newsfeed__delete-button').click(function(){
	var news_to_del = $(this).parent().parent().attr( 'id' );
	$('input[name="coltodel"]').val(news_to_del);

	$('.popup__background').show();
	$('.form__deletecolumns').show();
});


$(document).on('click',".language-selector",function () {

});


if(search_request == 0){
	console.log("Pas de recherche en cours")
} else {
	search_url = "https://newsapi.org/v2/everything?q="+search_request+"&apiKey=83644cf8558f42ea8a7c94bd4385dbbe"
	var ajax = new XMLHttpRequest();
	ajax.open("GET", search_url, true);
	ajax.send();
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200) {
			var data = ajax.responseText;
			var parsedJson = JSON.parse(data);
			var articles = parsedJson.articles;
			for(var i = 0 ; i<= articles.length; i++) {

				numcol = (i%3+1);

				numcol = numcol.toString();

				$('.search_col-'+numcol).append("<div class='article-searched'><a target='_blank' href="+articles[i].url+"><img src='"+articles[i].urlToImage+"' width='100%'><div class='article__title'><p>"+articles[i].title+"</p></div><div class='article__preview'><p>"+articles[i].description+"</p></div></a><div class='article__actions'><div class='article__button-like'></div><div class='article__button-fav'></div></div></div>");
			}
		}
	}
}

if(typeof favorites_apis === 'undefined' || !favorites_apis){
	console.log("Il y a eu une erreur")
} else {
		for(var i = 0 ; i <= 6; i++) {

			$('.bookmarks-'+i).append("<div class='article-searched'><a target='_blank' href="+favorites_apis[i].art_url+"><img src='"+favorites_apis[i].art_urlToImage+"' width='100%'><div class='article__title'><p>"+favorites_apis[i].art_title+"</p></div><div class='article__preview'></div></a></div>");
	}
}

console.log(userfavorites_apis)
if(userfavorites_apis == 0){
	console.log("Il y a eu une erreur")
} else {
	console.log(userfavorites_apis)
	for (bookmarked of userfavorites_apis) {
		$('.favorites').append("<div class='article-booked'><a target='_blank' href="+bookmarked.art_url+"><img src='"+bookmarked.art_urlToImage+"' width='100%'><div class='article__title'><p>"+bookmarked.art_title+"</p></div><div class='article__preview'></div></a></div>");
	}
}
