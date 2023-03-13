function checkPasscode() {
	var passcode_input = document.querySelector("#name");
	
	if (passcode_input.value != "Ivy") {
		passcode_input.setCustomValidity("Wrong. It's 'Ivy'.");
	} else {
		passcode_input.setCustomValidity(""); // be sure to leave this empty!
		alert("Correct!");
	}
}