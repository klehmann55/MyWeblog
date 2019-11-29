<?php
function setCookie($uname) {
	$value = $uname;
	setcookie('username', $value, time()+3600);
}