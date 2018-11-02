var myvar=window.setInterval(load,3000);
var johny=document.getElementById("cards");
	johny.style.width="300px";
	johny.style.height="200px";
	johny.style.border="2px solid red";
var list=[];
ZHUNUS = {};
function onStreamProcessed(data){
	document.getElementById("cards").innerHTML=" ";
	var outerDiv = document.getElementById("cards");
	data.forEach((car)=>{
		let div = document.createElement("div");
		div.textContent = car.maker+" "+car.model+" "+car.price;
		div.style.border="1px solid red";
		list.push(car.maker+" "+car.model+" "+car.price);
		ZHUNUS[car.maker+" "+car.model]=car.price;
		outerDiv.appendChild(div);
	});
	
}
function onSuccess(response){
	response.json().then(onStreamProcessed);

}
function onError(error){
	console.log(error);
}

function load(){
	
	fetch("http://demo4296963.mockable.io/listCars").then(onSuccess,onError);
}
function f1(){
	document.getElementById("cards").innerHTML=" ";
	var outerDiv = document.getElementById("cards");
	list.sort();
	for(var i=0;i<list.length;i++){
		list[i].split(" ");
		let div = document.createElement("div");
		div.textContent = list[i];
		div.style.border="1px solid red";
		outerDiv.appendChild(div);
	}
	list=[];
}
function f2(){
	document.getElementById("cards").innerHTML=" ";
	var outerDiv = document.getElementById("cards");
	var items = Object.keys(ZHUNUS).map(function(key) {
  return [key, ZHUNUS[key]];
});

items.sort(function(first, second) {
  return second[1] - first[1];
});

	for(var i=0;i<items.length;i++){
		let div = document.createElement("div");
		div.textContent = items[i];
		div.style.border="1px solid red";
		outerDiv.appendChild(div);}

	}


var button=document.getElementsByTagName("button");
	button[0].addEventListener("click",load);
	button[1].addEventListener("click",f1);
	button[2].addEventListener("click",f2);

