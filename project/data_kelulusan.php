<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    

  <title>HOME ADMIN</title>

</head>

<body>

<section class="content">
  <div class="inner">

  <center><h1>Data Siswa</h1>
    <table border="1" style="text-align:center">
        <tr >
            <th style="text-align:center">NO</th>
            <th style="text-align:center">Nama</th>
            <th style="text-align:center">Jenis Kelamin</th>
            <th style="text-align:center">Asal Sekolah</th>
            <th style="text-align:center" width="5%">NEM</th>
            <th style="text-align:center">Keterangan</th>
        </tr>

<?php
    date_default_timezone_set('Asia/Jakarta');
    
    $now = strtotime('now');
    $akhir = strtotime('07-10-2018');

    $beda = $akhir - $now;
    $day  = ($beda/24/60/60);

    $no_urut = 0;

    include "config.php";

    if($day > 0){
        echo "<p><b>Halaman tidak ditemukan</b> </p>";
    }else{
  
    $query  = "SELECT * FROM daftar WHERE role='user' AND keterangan='LULUS'";
    $sql    = mysqli_query($con, $query); 
  
    while($data = mysqli_fetch_array($sql)){ 
        $no_urut ++;

        echo "<tr>
        <td>$no_urut</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['jenis_kelamin']."</td>";
        echo "<td>".$data['asal_sekolah']."</td>";
        echo "<td>".$data['nem']."</td>";
        echo "<td>".$data['keterangan']."</td>";
        echo "</tr>";
    }
}
?>
        </table>
        </center>
    </div>
</section>
<br><center>
<a href="http://www.sman7cirebon.sch.id/berita/14-data-siswa-yang-diterima-di-sman-7-cirebon-tahun-2017/" target="new">
    <input class="button" type="button" value="Lampiran dari Sekolah"></a></center>
    <br><br>
</body>
</html>