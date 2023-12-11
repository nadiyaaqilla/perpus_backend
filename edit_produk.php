<?php
$respon = [
    "status" => 200,
    "msg" => "",
    "body" => [
        "data" => []
    ]
];

include "env.php";

if(isset($_POST['submit'])) {
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


    $sql = "UPDATE data_buku set judul_bk='$judul', nama_kategori='$kategori', sinop_bk='$sinopsis',
            cover_bk='$cover', file_bk='$file_bk' where isbn_bk='$isbn'";
            header("location:index.html");

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
echo json_encode($respon);






$koneksi->close();
?>
