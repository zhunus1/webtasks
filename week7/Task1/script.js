var a=document.getElementById("sport");
	a.addEventListener("click",function f1(){
function onTextReady(text,t){
	document.getElementById("news").innerHTML = "";
	text1=text.split("\n");
	for(line of text1){
		var s = line;
		var htmlObject = document.createElement('p');
			htmlObject.innerHTML = s;
		var console=document.getElementById("news");
			console.append(htmlObject);
	}
		
 		}

function onResponse(response){
 	return response.text();
}

fetch("http://demo4296963.mockable.io/news-sport").then(onResponse).then(onTextReady);
});
var b=document.getElementById("politics");
	b.addEventListener("click",function f1(){
function onTextReady(text,t){
	document.getElementById("news").innerHTML = "";
	text1=text.split("\n");
	for(line of text1){
		var s = line;
		var htmlObject = document.createElement('p');
			htmlObject.innerHTML = s;
		var console=document.getElementById("news");
			console.append(htmlObject);
	}
		
 		}

function onResponse(response){
 	return response.text();
}

fetch("http://demo4296963.mockable.io/news-politics").then(onResponse).then(onTextReady);
});
var c=document.getElementById("bussiness");
	c.addEventListener("click",function f1(){
function onTextReady(text,t){
	document.getElementById("news").innerHTML = "";
	text1=text.split("\n");
	for(line of text1){
		var s = line;
		var htmlObject = document.createElement('p');
			htmlObject.innerHTML = s;
		var console=document.getElementById("news");
			console.append(htmlObject);
	}
		
 		}

function onResponse(response){
 	return response.text();
}

fetch("http://demo4296963.mockable.io/news-bussiness").then(onResponse).then(onTextReady);
});