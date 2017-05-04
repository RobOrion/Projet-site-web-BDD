function action1(ele) {
	if (ele.checked == true) {
		var div = document.getElementById("case_supp");
		div.removeChild(div.firstChild);
		return true;
	}
	else {
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name_de_l_input";
		document.getElementById("case_supp").appendChild(input);
	}
	return false;
}

function action2(ele) {
	if (ele.checked == false) {
		var div = document.getElementById("em");
		div.removeChild(div.firstChild);
		return false;
	}
	else {
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name_de_l_input";
		document.getElementById("em").appendChild(input);
	}
	return true;
}
