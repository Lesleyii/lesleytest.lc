<?php

require ("views/header.php");

// var_dump($_GET);

$pages = ["main", "cart", "ledenec", "about"];

if(isset($_GET['page'])){
	if(in_array($_GET['page'], $pages)){
		include "pages/" . $_GET['page'] . ".php";
	}
	else{
		include "pages/error.php";
	}
}
else{
		include "pages/error.php";
	}


require ("views/footer.php");

?>

<p>Baran</p>