<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Flow Sensor Monitoring</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./jquery/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="./js/mdb.min.js"></script>
    <script type="text/javascript" src="jquery-latest.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){ 
                $("#ceksensor").load('ceksensor.php');
            }, 1000);
        });
    </script>
    <!-- Memanggil data grafik -->
    <script type="text/javascript">
        var refreshid = setInterval(function(){
            $('#responsecontainer').load('data.php');
        }, 2000);
    </script>
</head>
<body>
    <div class="welcome">
        <h2 class="greet">SELAMAT DATANG DI HALAMAN MONITORING <i>WATER FLOW METER</i></h2>
    </div>
    <ul class="menu">
            <li><a href="#intro"><b>Intro</b></a></li>
            <li><a href="#monitoring"><b>Monitoring Real Time</b></a></li>
    </ul>

    <div id="intro">
        <h1 class="judul1">INTRO</h1>
        <p class="teks"><b>Rancang Bangun <i>Water Flow Meter</i> Berbasis Web</b> merupakan judul dari sebuah mini projek yang penulis
         kerjakan selama melakukan kerja praktek di Seven Inc Yogyakarta. Adapun prinsip kerja dari alat ini di atur menggunakan 
         ESP8266, dimana motor akan memompa air kemudian water flow sensor akan membaca data dari aliran air yang dipompa 
         dan hasil pembacaannya akan di muat pada halaman web yang sudah dihubungkan ke database. Sehingga pengguna dapat melakukan 
         monitoring secara <b><i>Real Time</i></b> 
         melalui halaman web  yang telah dibuat. Tujuan dibuatnya alat ini adalah sebagai proyek yang akan diajukan sebagai bukti 
         kerja selama melakukan kerja praktek di <b>Seven Inc</b> Yogyakarta.
        </p> <br><br>
        <p>Adapun Komponen inti yang dibutuhkan dalam pengerjaan proyek ini adalah sebagai berikut:</p>

        
        
        <img class="img-sensor"src="./images/sensor.jpg" alt=""> <br>
        <p style="text-align: center">Water Flow Sensor yf-s201</p>
        <img class="img-sensor" src="./images/esp8266.jpg" alt=""><br>
        <p style = "text-align: center">NodeMCU ESP8266</p>
        
    </div>
    
    <div id="monitoring">
    	<h1 class="judul2">MONITORING REAL TIME</h1>
        <h3>Hasil Pembacaan Volume Air (ml)</h3>
    	<div class="panel panel-body">
    		<h1><span id="ceksensor"></span></h1>
    	</div>
    </div>
    
    <!--tempat untuk menampilkan grafik-->
    <div class="container" style="text-align: center">
        <h2>Grafik Pembacaan Sensor</h2>
    </div>

    <!-- div untuk grafik -->
    <div class="container" id="responsecontainer"></div>
    

    

</body>
</html>