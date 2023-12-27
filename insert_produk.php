<?php
include "env.php";

$res = [
  "status" => 200,
  "msg" => "",
  "body" => [
      "data" => []
  ]
      ];

     
      // Mengambil informasi file gambar
      $cover_bk = $_FILES["cover_bk"]["name"];
      $gambar_tmp = $_FILES["cover_bk"]["tmp_name"];
      $gambar_path = "file/img/" . $cover_bk;  // Sesuaikan dengan direktori upload Anda
      // Pindahkan file gambar ke direktori upload
      move_uploaded_file($gambar_tmp, $gambar_path);
      
      $file_bk = $_FILES["file_bk"]["name"];
      $file_tmp = $_FILES["file_bk"]["tmp_name"];
      $file_path = "file/" . $file_bk;  // Sesuaikan dengan direktori upload Anda
      // Pindahkan file gambar ke direktori upload
      move_uploaded_file($file_tmp, $file_path);
      
      $judul = $_POST['judul_bk'];
      $isbn = $_POST['isbn_bk'];
      $kode = $_POST['kode'];
      $sinopsis = $_POST['sinop_bk'];
      $penulis = $_POST['penulis_bk'];
      
      
      
      $i=mysqli_query($koneksi, "SELECT * FROM kategori");
      
      while ($row = mysqli_fetch_array($i)) {
      
         $row['nama'];
      
      }
      
      $q="INSERT INTO data_buku (cover_bk, judul_bk, isbn_bk, kode, sinop_bk, penulis_bk, file_bk) 
      VALUES ('$cover_bk', '$judul', '$isbn', '$kode', '$sinopsis', '$penulis', '$file_bk')";
      
      
      $result=mysqli_query($koneksi,$q);
                                                                            
      if ($result) {
      
        $res['status'] = 200;
        $res['msg'] = "Data berhasil di insert";
        $res['body']['data'] =[
        'cover_bk' => $cover_bk,
        'judul_bk' => $judul,
        'isbn_bk' => $isbn,
        'kode' => $kode,
        'sinop_bk' => $sinopsis,
        'penulis_bk'=> $penulis,
        'file_bk' => $file_bk
        
        ];
       
      } else {
        $res['status'] = 401;
        $res['msg'] = "Gagal membuat kategori";
        $res['body']['error'] = "Kesalahan validasi input";
      }
    


echo json_encode($res);
?>
