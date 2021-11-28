<?php
include 'config.php';
session_start();
$id = $_SESSION['nisn'];

$q = "SELECT * FROM daftar WHERE nisn='".$id."'";
$s=mysqli_query($con,$q);
while($row=mysqli_fetch_array($s)){
    $data2=$row['nama'];
}
?>

<?php
// memanggil library FPDF
require('fpdf.php');

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');

// membuat halaman baru
$pdf->AddPage();

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

// mencetak string 
$pdf->Cell(280,7,'SEKOLAH MENENGAH ATAS NEGERI 7 KOTA CIREBON',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(280,7,'DATA SISWA DITERIMA TAHUN AJARAN 2019/2020',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);

$pdf->Cell(25,6,'NISN',1,0);
$pdf->Cell(45,6,'Nama Siswa',1,0);
$pdf->Cell(45,6,'Tempat Tanggal Lahir',1,0);
$pdf->Cell(27,6,'Jenis Kelamin',1,0);
$pdf->Cell(15,6,'Agama',1,0);
$pdf->Cell(50,6,'Asal Sekolah',1,0);
$pdf->Cell(15,6,'NEM',1,0);
$pdf->Cell(28,6,'Telepon',1,0);
$pdf->Cell(21,6,'Keterangan',1,1);
 
$pdf->SetFont('Arial','',10);

$query = "SELECT * FROM daftar WHERE role='user' AND keterangan='DITERIMA' ";
$sql   = mysqli_query($con, $query);


while ($row = mysqli_fetch_array($sql)){

    $pdf->Cell(25,6,$row['nisn'],1,0);
    $pdf->Cell(45,6,$row['nama'],1,0);
    $pdf->Cell(45,6,$row['ttl'],1,0);
    $pdf->Cell(27,6,$row['jenis_kelamin'],1,0);
    $pdf->Cell(15,6,$row['agama'],1,0); 
    $pdf->Cell(50,6,$row['asal_sekolah'],1,0);
    $pdf->Cell(15,6,$row['nem'],1,0); 
    $pdf->Cell(28,6,$row['no_hp'],1,0); 
    $pdf->Cell(21,6,$row['keterangan'],1,1); 
}
 
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,7,'TTD',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(50,6,$data2,1,0,'C');

$pdf->Output();
?>