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
obj_info.addEventListener("submit", function(e){
	
	for(let i=0; i<obj_info.length-4; i++){
		if (obj_info[i].value == "" ||obj_info[i].value == null){
			obj_info[i].focus();
			obj_info[i].select();
			obj_info[i].style.backgroundColor=green;
			alert(obj_info[i].name + " can't be left blank.");
			e.preventDefault();
			return;
		}
	}
		if (obj_info[2].value.length != 5){
			obj_info[2].focus();
			obj_info[2].select();
			obj_info[2].style.backgroundColor=green;
			alert(obj_info[2].name + " has to be a valid zipcode.");
			e.preventDefault();
			return;
		}
		else if (obj_info[3].value.length != 10){
			obj_info[3].focus();
			obj_info[3].select();
			obj_info[3].style.backgroundColor=green;
			e.preventDefault();
			alert(obj_info[3].name + " has to be a valid phone number.");
			return;
		}
		//both are validating the email
		else if (regex.test(obj_info[4].value) == false){
			obj_info[4].focus();
			obj_info[4].select();
			obj_info[4].style.backgroundColor=green;
			e.preventDefault();
			alert(obj_info[4].name + " has to be a valid email.");
			return;
		}
		else if (obj_info[4].value.indexOf("@") == -1 || obj_info[4].value.indexOf(".") == -1 ){
			obj_info[4].focus();
			obj_info[4].select();
			obj_info[4].style.backgroundColor=green;
			e.preventDefault();
			alert(obj_info[4].name + " has to be a valid email.");
			return;
		}else{
			return;
		}
	});





