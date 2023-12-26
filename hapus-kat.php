<?php 
include "env.php";

$res = [
  "status" => 200,
  "msg" => "",
  "body" => "",
];

$kode = $_GET['kode'];

$q = mysqli_query($koneksi, "DELETE FROM kategori WHERE kode='$kode'");

if ($q){
  $res['status'] = 200;
  $res['msg'] = "Data berhasil dihapus";
  $res['body'] = "";
} else {
  $res['status'] = 404;
  $res['msg'] = "Data tidak ditemukan";
  $res['body'] = "";
}

echo json_encode($res);

?>