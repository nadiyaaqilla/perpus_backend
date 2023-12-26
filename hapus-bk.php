<?php
include "env.php";
$res = [
    "status" => 200,
    "msg" => "",
    "body" => "",
  ];

$isbn = mysqli_real_escape_string($koneksi, $_REQUEST['isbn']);

$d = mysqli_query($koneksi, "SELECT cover_bk, file_bk FROM data_buku WHERE isbn_bk='$isbn'");
$dt = mysqli_fetch_array($d);
$cover = $dt['cover_bk'];
$filebk = $dt['file_bk'];

unlink('file/img/' . $cover);
unlink('file/' . $filebk);

$q = mysqli_query($koneksi, "DELETE FROM data_buku WHERE isbn_bk='$isbn'");
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


