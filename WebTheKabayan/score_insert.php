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

	$id_score=$_REQUEST['id_score']; 
	$score=$_REQUEST['score']; 
	$datetime=date("Y-m-d H:i:s");

    if($score==NULL){
		
		$r["re"]="data pada kosong";
		print(json_encode($r));
		die('Can not saving. Connection Failed. ' . mysql_error());
		
	}else{
		
		$q="INSERT INTO `scores`(`score`, `tgl_input`) VALUES('$score', '$datetime')";
		$s= mysql_query($q); 
		 if(!$s){
			$r["re"]="Terjadi masalah pada saat pengisian ke database";

			print(json_encode($r));
		 }else{
			$r["re"]="Success publish score to website";

			print(json_encode($r));
		 } 
	}
			
	mysql_close($con);
               
?>