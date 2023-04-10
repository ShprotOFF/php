<?php

try {
	$link = new PDO('mysql:dbname=sprav; host=localhost', 'sprav', 's1p1r1a1v2');
}catch(PDOException $e) {
	die($e->getMessage());
}

?>