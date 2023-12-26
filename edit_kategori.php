<?php
include "env.php";

$res = [
  "status" => 200,
  "msg" => "",
  "body" => [
    "data" => [
      "nama" => "",
    ]
  ]
];

$kode = $_GET['kode'];
$nama = $_POST['nama'];

$q = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kode='$kode'");
$ary = mysqli_fetch_array($q);

// Gunakan prepared statements untuk mencegah SQL injection
$stmt = $koneksi->prepare("UPDATE kategori SET nama = ? WHERE kode = ?");
$stmt->bind_param("si", $nama, $kode);

if ($stmt->execute()) {
  $res['msg'] = "Data berhasil diupdate";
  $res['body']['data']['nama'] = $nama;
} else {
  $res['status'] = 400;
  $res['msg'] = "Gagal mengupdate kategori";
  $res['body']['error'] = "Kesalahan validasi input";
}

$stmt->close();
$koneksi->close();

echo json_encode($res);
?>