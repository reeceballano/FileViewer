<?php
function __autoload($class) {
	require('/class/' . strtolower($class) . '.class.php');
}
?>