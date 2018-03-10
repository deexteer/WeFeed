// On parcours le tableau avec la boucle for
// et on récupère le titre de l'api et son url
for(var j = 0; j < all_apis.length; j++) {
	j = j.toString();
	var api_title = all_apis[j].api_name;
	var api_url = all_apis[j].api_url;

	// On appelle la fonction qui va nous permettre de faire une requête ajax
	getApiResult(j, api_title, api_url);
}


function getApiResult(number, api_title, api_url){

	$('.newsfeed_container').append("<div class='newsfeed_column'><div class='newsfeed__title'>"+api_title+"</div><div class='news newsfeed_umber"+number+"'></div></div>");
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
				$('.newsfeed_umber'+number).append("<div class='article'><a target='_blank' href="+articles[i].url+"><img src='"+articles[i].urlToImage+"' width='100%'><div class='article__title'><p>"+articles[i].title+"</p></div><div class='article__preview'><p>"+articles[i].description+"</p></div></a></div>");
			}
		}
	}
}
