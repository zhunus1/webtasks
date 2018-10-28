function func(){
			var tableRef = document.getElementById('students');
		if(document.getElementById("name").value==""){
		   document.getElementById("name").style.border = "2px solid red";}
		else if(document.getElementById("surname").value==""){
			    document.getElementById("surname").style.border = "2px solid red";}
		else if(document.getElementById("faculty").value=="-1"){
			    document.getElementById("faculty").style.border="2px solid red";}
		else{
			var Row   = tableRef.insertRow();
			var Cell1  = Row.insertCell(0);
			var Cell2  = Row.insertCell(1);
			var Cell3  = Row.insertCell(2);
			var Text1  = document.createTextNode(document.getElementById("name").value);
			var Text2  = document.createTextNode(document.getElementById("surname").value);
			var Text3  = document.createTextNode(document.getElementById("faculty").value);
				Cell1.appendChild(Text1);
				Cell2.appendChild(Text2);	
				Cell3.appendChild(Text3);
			document.getElementById("name").style.border = "1px solid black";
			document.getElementById("surname").style.border = "1px solid black";
			document.getElementById("faculty").style.border="1px solid black";}
		}
			var btn=document.getElementById("addStudent")
				btn.addEventListener("click", func);
