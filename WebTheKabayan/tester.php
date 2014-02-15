<?php
    $hostname = "localhost";
	$database ="thekabayan";
	$username ="root";
	$pass ="";	

	date_default_timezone_set('Asia/Jakarta');

	$con = mysql_connect($hostname,$username,$pass) or die("Koneksi gagal");
	mysql_select_db($database) or die("Database tidak bisa dibuka");

    $q= mysql_query("select * from pemains");
    while($p=mysql_fetch_array($q)){
        $sq=mysql_query("select * from scores where id_score = $p[id_score]");
        while($s=mysql_fetch_array($sq)){
    		echo "<b>$p[nama] : $s[score] | $p[tgl_input]</b><br>";
        }
    }
?>