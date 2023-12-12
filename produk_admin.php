<?php
$respon = [
    "status" => 200,
    "msg" => "",
    "body" => [
        "data" => []
    ]
];

include "env.php";

if (isset($_POST['submit'])) {
    $judul = $_POST['judul_bk'];
    $isbn = $_POST['isbn_bk'];
    $kategori = $_POST['nama_kategori'];
    $sinopsis = $_POST['sinop_bk'];
    $cover = $_FILES['cover_bk'];
    $coverDir = "../file/img/";
    $targetcover = $coverDir . basename($_FILES["cover_bk"]["name"]);
    move_uploaded_file($_FILES["cover_bk"]["tmp_name"], $targetcover);
    $file_bk = $_FILES['file_bk'];
    $fileDir = "../file/";
    $targetFile = $fileDir . basename($_FILES["file_bk"]["name"]);
    move_uploaded_file($_FILES["file_bk"]["tmp_name"], $targetFile);

    $sql = "INSERT INTO data_buku (cover_bk, judul_bk, isbn_bk, nama_kategori, sinop_bk, file_bk) 
        VALUES ('$targetcover', '$judul', '$isbn', '$kategori', '$sinopsis', '$targetFile')";

    if ($koneksi->query($sql) === TRUE) {
        $respon["status"] = "success";
        $respon["msg"] = "Data berhasil ditambahkan";
    } else {
        $respon["status"] = "error";
        $respon["msg"] = "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

// Always output JSON, whether success or error
header('Content-Type: application/json');
echo json_encode($respon);

$koneksi->close();
