let obj= document.forms[0];
let bin = 0;
let can = 0;
let five = 0;
let one = 0;

let green='#7B8C55';

let total = 0;
let taxMoney = 0;
let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


obj.addEventListener("change", calTotal);
function calTotal(){
	bin = obj[0].value * obj[1].value;
	document.getElementById("bin_total").value = bin;
	can = obj[3].value * obj[4].value;
	document.getElementById("can_total").value = can;
	five = obj[6].value * obj[7].value;
	document.getElementById("five_total").value = five;
	one = obj[9].value * obj[10].value;
	document.getElementById("one_total").value = one;
	total = bin + can + five + one;
	document.getElementById("total").value = total;
	document.getElementById("grandTotal").value = total + taxMoney;

}

let tax = document.getElementById("shipping");
tax.addEventListener("change", addTax);

function addTax(){
	if (tax.value == "shipping"){
		taxMoney = 10;
	}
	else if(tax.value == "willCall"){
		taxMoney = 0;
	}
	document.getElementById("tax").value = taxMoney;
	document.getElementById("grandTotal").value = total + taxMoney;

}

let obj_info = document.forms[2];
obj_info.addEventListener("submit", clarifyInfo);

function clarifyInfo(e){
	e.preventDefault();
	for(let i=0; i<obj_info.length-4; i++){
		if (obj_info[i].value == "" ||obj_info[i].value == null){
			obj_info[i].focus();
			obj_info[i].select();
			obj_info[i].style.backgroundColor=green;
			alert(obj_info[i].name + " can't be left blank.");
			console.log(">>");
			return;
		}
	}
		if (obj_info[2].value.length != 5){
			obj_info[2].focus();
			obj_info[2].select();
			obj_info[2].style.backgroundColor=green;
			alert(obj_info[2].name + " has to be a valid zipcode.");
			return;
		}
		else if (obj_info[3].value.length != 9){
			obj_info[3].focus();
			obj_info[3].select();
			obj_info[3].style.backgroundColor=green;
			alert(obj_info[3].name + " has to be a valid phone number.");
			return;
		}
		//both are validating the email
		else if (regex.test(obj_info[4].value) == false){
			obj_info[4].focus();
			obj_info[4].select();
			obj_info[4].style.backgroundColor=green;
			alert(obj_info[4].name + " has to be a valid email.");
			return;
		}
		else if (obj_info[4].value.indexOf("@") == -1 || obj_info[4].value.indexOf(".") == -1 ){
			obj_info[4].focus();
			obj_info[4].select();
			obj_info[4].style.backgroundColor=green;
			alert(obj_info[4].name + " has to be a valid email.");
			return;
		}else{
		let text = "<h1>RECEIPT</h1><p>Item Purchased</p>";
		let obj1 = document.forms[0];
		let obj2 = document.forms[1];
		for (let i = 1 ; i < obj1.length; i+=3){
			text+= ( obj1[i].name + ": " );
			text+=(obj1[i].value + "<br>")
			text+=("subtotal: " + obj1[i+1].value + "<br>")
		}


		text+= "<p><span>grand total: " + obj2[obj2.length-1].value + "</span></p>";
		text+="<p>Customer Information</p>";
		let obj3 = document.forms[2];
		let obj3_card = document.forms[2][6];
		let encode = "";
		for(let i =0 ; i < obj3_card.value.length-4 ; i++){
			encode += "x";
		}
		
		for (let i = obj3_card.value.length - 4; i < obj3_card.value.length ; i++){
			encode += "" + obj3_card.value[i]
		}

		document.forms[2][6].value = encode;
	


		for(let i = 0; i < obj3.length-3; i ++){
			text += obj3[i].name + ": " + obj3[i].value + "<br>";
		}
		let date = new Date();
		text+="<p><span> Check out time: <br>" + date.getUTCFullYear() + "." + date.getUTCMonth() + "." + date.getUTCDate();
		text += " " + date.getHours() + ':' + date.getMinutes() + "</span></p>";

		document.getElementById("display").innerHTML= text;
		}
	}





