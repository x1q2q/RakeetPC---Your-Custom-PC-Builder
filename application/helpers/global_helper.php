<?php
function alert($pesan){
	echo "<script type='text/javascript'>alert('".$pesan."')</script>";
}
function back(){
	echo "<script type='text/javascript'>history.go(-1)</script>";
}
function get_waktu($strip,$format){
	$asal = new Datetime($strip);
	$waktu = $asal->format($format);
	return $waktu;
}
function get_timestamp($format){
	$timestamp = time();
	$dt = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
	$dt->setTimestamp($timestamp);
	return $dt->format($format);
}
?>
