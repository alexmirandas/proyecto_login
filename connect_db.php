<?php
	$link =mysql_connect("localhost","root","qaz12345");
	if($link){
		mysql_select_db("proyecto_login",$link);
	}
?>