<?php
	/*$hostname = "mysql.idhostinger.com";
	$database ="u270826124_tkbyn";
	$username ="u270826124_root";
	$pass ="akudangaga";*/

	$hostname = "localhost";
	$database ="thekabayan";
	$username ="root";
	$pass ="";	

	date_default_timezone_set('Asia/Jakarta');

	$con = mysql_connect($hostname,$username,$pass) or die("Koneksi gagal");
	mysql_select_db($database) or die("Database tidak bisa dibuka");

	$result = mysql_query("SELECT * FROM scores");

	while($row=mysql_fetch_assoc($result)){
	$output[]=$row;
	}

	print(json_encode($output));

	mysql_close($con); 
?>