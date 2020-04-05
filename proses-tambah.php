<?php

include 'koneksi.php';

if(isset($_POST['input']))
{
  $NIS = $_POST['NIS'];
  $Nama = $_POST['Nama'];

  if($_POST['Jurusan'] == "RPL"){
 $Jurusan = "Rekayasa Perangkat Lunak";
} elseif ($_POST['Jurusan'] == "TKJ") {
  $Jurusan = "Teknik Komunikasi Jaringan";
}

  if ($_POST['Kelas'] == "X") {
    $Kelas = "X";
  }elseif($_POST['Kelas'] == "XI") {
    $Kelas = "XI";
  }elseif($_POST['Kelas'] == "XII") {
    $Kelas = "XII";
  }
  $Alamat = $_POST['Alamat'];
  $Nilai_Web = $_POST['Nilai_Web'];
  $Nilai_PBO = $_POST['Nilai_PBO'];
  $Nilai_Basdat = $_POST['Nilai_Basdat'];
  $Nilai_Desain = $_POST['Nilai_Desain'];
  $Nilai_Progdas = $_POST['Nilai_Progdas'];
  $jumlah = $Nilai_Web+$Nilai_PBO+$Nilai_Basdat+$Nilai_Desain+$Nilai_Progdas;
  $Rata_rata = $jumlah/5;
  if($Rata_rata >= 90)
  {
    $Predikat_Nilai='A';
    $Keterangan='Excellent';
  }
  else if($Rata_rata >= 80)
  {
    $Predikat_Nilai='B';
    $Keterangan='Baik';
  }
  else if($Rata_rata >= 70)
  {
    $Predikat_Nilai='C';
    $Keterangan='Cukup';
  }
  else if($Rata_rata >= 60)
  {
    $Predikat_Nilai='D';
    $Keterangan='Kurang';
  }
  else if($Rata_rata<= 50)
  {
    $Predikat_Nilai='E';
    $Keterangan='Rendah';
  }
  $sql = "INSERT INTO from_nilai (NIS, Nama, Jurusan, Kelas, Alamat, Nilai_Web, Nilai_PBO, Nilai_Basdat, Nilai_Desain, Nilai_Progdas, Rata_rata, Predikat_Nilai, Keterangan)
            values ('$NIS', '$Nama', '$Jurusan', '$Kelas', '$Alamat', '$Nilai_Web', '$Nilai_PBO', '$Nilai_Basdat', '$Nilai_Desain', '$Nilai_Progdas', '$Rata_rata', '$Predikat_Nilai', '$Keterangan')";

$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
   header("Location: tambah.php");
}
else
{
   header("Location: index.php");
}
}

?>
