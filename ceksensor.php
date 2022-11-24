<?php
    //koneksi ke database
    $konek = mysqli_connect("localhost","root","","websensor");

    //baca isi tabel sensor
    $sql = mysqli_query($konek, "select * from sensor");
    $data = mysqli_fetch_array($sql);
    $nilai = $data["nilai_sensor"];

    echo $nilai;

    //mengirim hasil baca sensor ke tabel tb_sensor sehingga akan ditampilkan dalam grafik
    // $s = mysqli_query($konek, "insert into tb_sensor(id,volume) values ('','$nilai')"); 
?>