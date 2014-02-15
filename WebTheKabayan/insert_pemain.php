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

	$id_pemain=$_REQUEST['id_pemain'];
	$id_score=$_REQUEST['id_score'];
	$nama=$_REQUEST['nama'];	 
	$datetime=date("Y-m-d H:i:s");

    if($nama==NULL || $id_score==NULL){
		
		$r["re"]="data pada kosong";
		print(json_encode($r));
		die('Can not saving. Connection Failed. ' . mysql_error());
		
	}else{
		
		$q="INSERT INTO `pemains`(`id_score`, `nama`, `tgl_input`) VALUES('$id_score', '$nama', '$datetime')";
		$s= mysql_query($q); 
		 if(!$s){
			$r["re"]="Terjadi masalah pada saat pengisian ke database";

			print(json_encode($r));
		 }else{
			$r["re"]="Success publish to website";

			print(json_encode($r));
		 } 
	}
			
	mysql_close($con);
               
?>