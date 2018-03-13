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
	$('.newsfeed_container').html('<div class="news__feed-message">Vous n\'avez pas encore ajouté de feed dans votre tableau de bord ... :( Allez vite dans les paramètres pour changer cela !)</div>');
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





$('.newsfeed__delete-button').click(function(){
	var news_to_del = $(this).parent().parent().attr( 'id' );
	$('input[name="coltodel"]').val(news_to_del);

	$('.popup__background').show();
	$('.form__deletecolumns').show();
});


$(document).on('click',".language-selector",function () {

});


if(search_request == 0){
	$('.newsfeed_container').html('<div class="news__feed-message">Vous n\'avez pas encore ajouté de feed dans votre tableau de bord ... :( Allez vite dans les paramètres pour changer cela !)</div>');
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
			console.log(articles)
			for(var i = 0 ; i<= articles.length; i++) {
				
				$('.search_results').append("<div class='results'>"+articles[i].title+"</div>");
			}
		}
	}
}
