<?php
  include "index_admin.php";
?>

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

        <center><h1>Data Nilai USBN Siswa</h1>
            <table border="1" style="text-align:center">
                <tr>
                    <th>Mata Pelajaran</th>
                    <th style="text-align:center">Ilmu Pengetahuan Alam</th>
                    <th style="text-align:center">Matematika</th>
                    <th style="text-align:center">Bahasa Inggris</th>
                    <th style="text-align:center">Bahasa Indonesia</th>
                </tr>
                
            <?php
          
            include "config.php";

                    $id = $_GET['nisn'];
                
                    $query  =   "SELECT * FROM data_nilai WHERE nisn='".$id."'";
                    $sql    =   mysqli_query($con, $query); 
                    
                        while($data = mysqli_fetch_array($sql)){
                            echo"<tr>";
                                echo "<td>Nilai</td>";
                                echo "<td>".$data['ipa']."</td>";
                                echo "<td>".$data['mtk']."</td>";
                                echo "<td>".$data['b_ing']."</td>";
                                echo "<td>".$data['b_ind']."</td>";
                            echo"</tr>";
                        }
            ?>
             </table><br>
                <a href="index_admin.php?page=data">
                    <input type="button" value="Kembali">
                </a>
             </center>
        </section>
    </div>
</body>
</html>