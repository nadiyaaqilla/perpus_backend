<?php
$respon = [
    "status" => 200,
    "msg" => "",
    "body" => [
        "data" => []
    ]
];

include "env.php";
$query = mysqli_query($koneksi, "SELECT * FROM data_buku, kategori WHERE data_buku.kode = kategori.kode");
$i=mysqli_query($koneksi, "SELECT * FROM kategori");
      
      while ($row = mysqli_fetch_array($i)) {
      
         $row['nama'];
      
      }

if ($query) {
    $respon['msg'] = "Proses berhasil";

    while ($row = mysqli_fetch_assoc($query)) {
        $bookData = [
            "isbn_bk" => $row['isbn_bk'],
            "judul_bk" => $row['judul_bk'],
            "kode" => $row['nama'],
            "penulis_bk" => $row['penulis_bk'],
            "sinop_bk" => $row['sinop_bk'],
            "cover_bk" => $row['cover_bk'],
            "file_bk" => $row['file_bk'],
        ];

        $respon['body']['data'][] = $bookData;
    }
} else {
    $respon['status'] = 401;
    $respon['msg'] = "Proses gagal, ada masalah di database";
}
header('Content-Type: application/json');
echo json_encode($respon);
?>
