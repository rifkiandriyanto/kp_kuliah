<?php
	if(isset($_GET['page'])){
		$page=htmlentities($_GET['page']);
	}else{
		$page="home";
	}
		switch($page){
		
			case "welcome";
			include "welcome.php";
			break;
			
			case "profil";
			include "profil.php";
			break;
			
			case "gallery";
			include "gallery.php";
			break;
			
			case "tampil_penduduk";
			include "tampil_penduduk.php";
			break;
			
			case "tampil_mutasi";
			include "tampil_mutasi.php";
			break;
			
			case "penduduk_lakilaki";
			include "penduduk_lakilaki.php";
			break;
			
			case "penduduk_perempuan";
			include "penduduk_perempuan.php";
			break;
			
			case "input_penduduk";
			include "input_penduduk.php";
			break;
			
			case "contact";
			include "contact.php";
			break;
		
			default;
			include "welcome.php";
			break;
			
			
		}
?>