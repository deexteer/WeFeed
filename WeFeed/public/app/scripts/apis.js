// Les apis sont stockées içi avec leur titre et leur type
//  plus tard elles sdevront être stockées içi
var apis = [
	['Libération','https://newsapi.org/v2/top-headlines?sources=liberation&apiKey=83644cf8558f42ea8a7c94bd4385dbbe', 'JSON'],
	['Le Monde','https://newsapi.org/v2/top-headlines?sources=le-monde&apiKey=5999d2d8afd2446caf1489d2ec69680c', 'JSON'],
	['Times of india', 'https://newsapi.org/v2/top-headlines?sources=the-times-of-india&apiKey=83644cf8558f42ea8a7c94bd4385dbbe', 'JSON']
];

// On parcours le tableau avec la boucle for
// et on récupère le titre de l'api et son url
for (var j = 0; j < apis.length; j++) {
	var api_title = apis[j][0];
	var api_url = apis[j][1];

	// On appelle la fonction qui va nous permettre de faire une requête ajax
	getApiResult(j, api_title, api_url);
}

function getApiResult(number, api_title, api_url){

	//D'abord on créer une nouvelle colonne d'information
	$('.newsfeed_container').append("<div class='newsfeed_column'><div class='newsfeed__title'>"+api_title+"</div><div class='news newsfeed_umber"+number+"'></div></div>");
	var ajax = new XMLHttpRequest();

	ajax.open("GET", api_url, true);
	ajax.send();
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200) {

			var data = ajax.responseText;
			var parsedJson = JSON.parse(data);
			var articles = parsedJson.articles;

			console.log(articles);

			for(var i = 0 ; i<= articles.length; i++) {
				number = number.toString();
				$('.newsfeed_umber'+number).append("<div class='article'><a target='_blank' href="+articles[i].url+"><img src='"+articles[i].urlToImage+"' width='100%'><div class='article__title'><p>"+articles[i].title+"</p></div><div class='article__preview'><p>"+articles[i].description+"</p></div></a></div>");
			}
		}
	}
}
