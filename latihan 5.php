<?php  
	$day = date ("D");
	switch ($day) {
		case 'sun': $hari = "Minggu"; break;
		case 'mon' : $hari = "Senin"; break;
		case 'tue' : $hari = "Selasa"; break;
		case 'wed' : $hari = "Rabu"; break;
		case 'thu' : $hari = "kamis"; break;
		case 'fri' : $hari = "jumat"; break;
		case 'sat' : $hari = "Sabtu"; break;
		default    : $hari = "Kiamat";
	}
	echo "sekarang hari <b>$hari</b>";
?>