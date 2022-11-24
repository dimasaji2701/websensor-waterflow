<?php
	//koneksi ke database
    $konek = mysqli_connect("localhost","root","","websensor");

	//baca volume dari NodeMCU
	$volume = $_GET['volume'];
	//kosongkan tabel sensor
	mysqli_query($konek, "delete from sensor");

	//simpan volume yang baru ke tabel sensor
	$simpan = mysqli_query($konek, "insert into sensor(nilai_sensor)values('$volume')");
	if($simpan)
		echo "Berhasil";
	else
		echo "Gagal";
?>