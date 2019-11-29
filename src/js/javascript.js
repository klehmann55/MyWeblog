document.addEventListener('DOMContentLoaded', start);

function start() {
	
	// Get the forms
	var rform = document.getElementById('registerform');
	var lform = document.getElementById('loginform');
	var fform = document.getElementById('forgotform');
	// Get the modal
	var modal = document.getElementById('modal');
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == rform || event.target == modal) {
			rform.style.display = "none";
			modal.style.display = "none";
		}
		if (event.target == lform || event.target == modal) {
			lform.style.display = "none";
			modal.style.display = "none";
		}
		if (event.target == fform || event.target == modal) {
			fform.style.display = "none";
			modal.style.display = "none";
		}
	}
}