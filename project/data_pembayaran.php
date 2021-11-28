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

        <center><h1>Data Pembayaran</h1>
            <table border="1" style="text-align:center">
                <tr>
                    <th style="text-align:center">ID Pembayaran</th>
                    <th style="text-align:center">Nama Data Upload</th>
                    <th style="text-align:center">NISN</th>
                    <th style="text-align:center">Aksi</th>
                </tr>
                
            <?php
                include "config.php";                
                    $query  =   "SELECT * FROM pembayaran";
                    $sql    =   mysqli_query($con, $query); 
                    
                        while($data = mysqli_fetch_array($sql)){
                            echo"<tr>";
                                echo "<td>".$data['id_bayar']."</td>";
                                echo "<td>".$data['name_data']."</td>";
                                echo "<td>".$data['nisn']."</td>";
                                echo "<td>
                                <a href='berkas_admin.php?nisn=".$data['nisn']."'>
                                    <input type='button' value='Lihat'></a></td>";
                            echo"</tr>";
                        }
            ?>
             </table>
             </center>
        </section>
    </div>
</body>
</html>