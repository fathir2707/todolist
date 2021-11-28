<?php
// memanggil library FPDF
require('fpdf.php');

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');

// membuat halaman baru
$pdf->AddPage();

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

// mencetak string 
$pdf->Cell(190,7,'SEKOLAH MENENGAH ATAS NEGERI 7 KOTA CIREBON',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'BUKTI PENDAFTARAN',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);

$pdf->Cell(20,6,'NISN',1,0);
$pdf->Cell(30,6,'Nama Siswa',1,0);
$pdf->Cell(27,6,'Jenis Kelamin',1,0);
$pdf->Cell(40,6,'Asal Sekolah',1,0);
$pdf->Cell(15,6,'NEM',1,1);
 
$pdf->SetFont('Arial','',10);
 
include 'config.php';

session_start();
$id = $_SESSION['nisn'];

$query = "SELECT * FROM daftar WHERE nisn='$id'";
$sql   = mysqli_query($con, $query);


while ($row = mysqli_fetch_array($sql)){

    $data  = $row['foto'];
    $data2 = $row['nama'];
    $data3 = $row['keterangan'];

    $pdf->image('files/'.$data,155,40,40);

    $pdf->Cell(20,6,$row['nisn'],1,0);
    $pdf->Cell(30,6,$row['nama'],1,0);
    $pdf->Cell(27,6,$row['jenis_kelamin'],1,0);
    $pdf->Cell(40,6,$row['asal_sekolah'],1,0);
    $pdf->Cell(15,6,$row['nem'],1,1); 
}

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);

    $pdf->SetFont('Arial','B',24);
    $pdf->Cell(190,7,$data3,0,1,'C');

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,7,'TTD',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(50,6,$data2,1,0,'C');
 
$pdf->Output();
?>