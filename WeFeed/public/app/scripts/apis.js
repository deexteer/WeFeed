if(user_apis == 0){
	$('.newsfeed_container').html('<div class="news__feed-message">Vous n\'avez pas encore ajouté de feed dans votre tableau de bord ... :( Allez vite dans les paramètres pour changer cela !)</div>');
}

for (value of user_apis) {
	$('.ok').html("ok")
	console.log(value)
}

for(var j = 0; j < user_apis.length; j++) {
	for(var i = 0; i < all_apis.length; i++) {
		if(user_apis[j] == all_apis[i].api_name){
			createFeeds(j, all_apis[i].api_name, all_apis[i].api_url)
		}
	}
}

function createFeeds(number, api_title, api_url){

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
