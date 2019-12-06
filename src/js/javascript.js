document.addEventListener('DOMContentLoaded', start);

function start() {
	
// Get the forms
	var rform = document.getElementById('registerform');
	var lform = document.getElementById('loginform');
	var fform = document.getElementById('forgotform');
	var rformh = document.getElementById('registerform-home');
	var lformh = document.getElementById('loginform-home');
	var fformh = document.getElementById('forgotform-home');
	
// Get the modal
	var modal = document.getElementById('modal');
	
	
// When the user clicks anywhere outside of the modal-content, in the modal, close it
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
		if (event.target == rformh || event.target == modal) {
			rformh.style.display = "none";
			modal.style.display = "none";
		}
		if (event.target == lformh || event.target == modal) {
			lformh.style.display = "none";
			modal.style.display = "none";
		}
		if (event.target == fformh || event.target == modal) {
			fformh.style.display = "none";
			modal.style.display = "none";
		}
	}
	
}


