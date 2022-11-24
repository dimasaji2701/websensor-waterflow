<?php  
    //koneksi database
    $konek=mysqli_connect("localhost","root","","websensor");
    
    //baca data dari tabel tb_sensor

    //baca ID tertinggi
    $sql_ID = mysqli_query($konek, "SELECT MAX(ID) FROM tb_sensor");
    //tangkap datanya
    $data_ID = mysqli_fetch_array($sql_ID);
    //ambil ID terakhir
    $ID_akhir = $data_ID['MAX(ID)'];
    $ID_awal = $ID_akhir - 10; //untuk menampilkan 10 data terakhir


    //baca informasi tanggal untuk 10 data terakhir pada sumbu x di grafik
    $tanggal = mysqli_query($konek, "select tanggal from tb_sensor where ID>='$ID_awal' and ID<='$ID_akhir' order by id ASC");
    //baca informasi volume - sumbu y di grafik
    $volume = mysqli_query($konek, "select volume from tb_sensor where ID>='$ID_awal' and ID<='$ID_akhir' order by id ASC");
?>

<!-- tampilan grafik -->
<div class="panel1 panel-primary">
    <div class="panel-heading">
        Grafik Sensor
    </div>

    <div class="panel-body">
        <!-- canvas untuk grafik -->
        <canvas id="myChart"></canvas>

        <!-- gambar grafik -->
        <script type="text/javascript">
            //baca id canvas tempat grafik akan di buat
            var canvas= document.getElementById('myChart');
            //letakkan data tanggal dan volume data untuk grafik
            var data = {
                labels : [
                   <?php
                       while($data_tanggal=mysqli_fetch_array($tanggal))
                        {
                            echo '"'.$data_tanggal['tanggal'].'",';
                        } 
                   ?>
                ],
                datasets : [{
                    label : "Volume",
                    fill: true,
                    backgroundColor: "rgba(28, 186, 29, .2)",
                    pointRadius: 5,
                    data : [
                        <?php
                            while($data_volume = mysqli_fetch_array($volume))
                            {
                                echo $data_volume['volume'].',';
                            }
                        ?>
                    ]
                }]

            } ;


            //option grafik 
            var option = {
                showLines: true,
                animation: {duration: 0}
            };

            //cetak ke dalam canvas
            var myLineChart = Chart.Line(canvas, {
                data : data,
                options : option
            });


        </script>
    </div>
</div>