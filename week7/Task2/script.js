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
var button=document.getElementsByTagName("button");
	button[0].addEventListener("click",load);


