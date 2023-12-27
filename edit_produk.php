<?php
include "env.php";

$res = [
  "status" => 200,
  "msg" => "",
  "body" => [
      "data" => [
          "cover_bk" => "",
          "isbn_bk" => "",
          "judul_bk" => "",
          "kode" => "",
          "penulis_bk" => "",
          "sinop_bk" => "",
          "file_bk" => "",
      ]
  ]
      ];

      // Mengambil informasi file gambar
$cover_bk = $_FILES["cover_bk"]["name"];
$gambar_tmp = $_FILES["cover_bk"]["tmp_name"];
$gambar_path = "file/img/" . $cover_bk;  // Sesuaikan dengan direktori upload Anda
// Pindahkan file gambar ke direktori upload
move_uploaded_file($gambar_tmp, $gambar_path);

  // Mengambil informasi file 
  $file_bk = $_FILES["file_bk"]["name"];
  $file_tmp = $_FILES["file_bk"]["tmp_name"];
  $file_path = "file/" . $file_bk;  // Sesuaikan dengan direktori upload Anda
  // Pindahkan file gambar ke direktori upload
  move_uploaded_file($file_tmp, $file_path);


// $cover_bk = basename($_FILES["cover_bk"]["name"]);
// $target_file = "/gambar". basename($_FILES["cover_bk"]["name"]);
// $upload = move_uploaded_file($_FILES["cover_bk"]["tmp_name"], $target_file);

// $cover_bk=$_POST['cover_bk'];
$isbn_bk = $_GET['isbn_bk'];
$judul_bk = $_POST['judul_bk'];
$kode = $_POST['kode'];
$penulis_bk = $_POST['penulis_bk'];
$sinop_bk = $_POST['sinop_bk'];


$i=mysqli_query($koneksi, "SELECT * FROM kategori");

while ($row = mysqli_fetch_array($i)) {

   $row['nama'];

}


$q= "UPDATE data_buku SET cover_bk='$cover_bk', judul_bk='$judul_bk', penulis_bk='$penulis_bk',
kode='$kode',sinop_bk='$sinop_bk',file_bk ='$file_bk' WHERE isbn_bk='$isbn_bk'";
// $q="INSERT INTO data_buku (cover_bk,isbn_bk,judul_bk,kode,penulis_bk,sinop_bk,file_bk) 
// VALUES ('$cover_bk','$isbn_bk','$judul_bk','$kode','$penulis_bk','$sinop_bk','$file_bk')";


$result=mysqli_query($koneksi,$q);
                                                                      
if ($result) {

  $res['status'] = 200;
  $res['msg'] = "Data berhasil di update";
  $res['body']['data'] =[
  'cover_bk' => $cover_bk,
  'isbn_bk' => $isbn_bk,
  'judul_bk' => $judul_bk,
  'kode' => $kode,
  'penulis_bk' => $penulis_bk,
  'sinop_bk' => $sinop_bk,
  'file_bk' => $file_bk,
  
  ];
 
} else {
  $res['status'] = 401;
  $res['msg'] = "Gagal update barang";
  $res['body']['error'] = "Kesalahan validasi input";
}

echo json_encode($res);
?>