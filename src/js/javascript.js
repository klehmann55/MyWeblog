function initBtn() {
	
	var btn = document.querySelector('#loginform button[type="submit"]');
	btn.addEventListener('click', chk);
}

function initLBtn() {
	var logoutBtn = document.getElementById('logout');
	logoutBtn.addEventListener('click', removeCookie);
}

function chk() {
	if ( document.getElementById("remember").checked ) {
		if (document.cookie.indexOf('username=') == -1) {
			setCookie(); 
		}
	} 
	else {
		removeCookie(); 
	}
}



function setCookie() {
	document.cookie = 'username=' 
	+ document.getElementById('luname').value 
	+ '; expires=Wed, 18 Dec 2019 12:00:00 UTC';
	document.cookie = 'Lieblingsfarbe=Blau; expires=Wed, 18 Dec 2019 12:00:00 UTC;'; 				
}

function removeCookie() {
	document.cookie = 'username=; expires=Thu, 01 Jan 1970 00:00:00 UTC';
	document.cookie = 'Lieblingsfarbe=; expires=Thu, 01 Jan 1970 00:00:00 UTC;';
}

function init() {
	// cookie da oder nicht?
	// if ( window.location == 'aktuelles.php' ) {
	if ( document.cookie.indexOf('username=') > -1 ) {
		var win1 = window.location;
		if ( win1 == 'http://localhost/0/dwg/10_PDORegisterLogin_self/' || win1 == 'http://localhost/0/dwg/10_PDORegisterLogin_self/index.php' ) {
			window.location = 'aktuelles.php';
			initLBtn();
		}
		initLBtn();
	}
	else {
		initBtn();
	}
}

document.addEventListener('DOMContentLoaded', init);

	