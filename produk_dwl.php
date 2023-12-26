<?php
$respon = [
    "status" => 200,
    "msg" => "",
    "body" => [
        "data" => []
    ]
];

include "env.php";

// Check if ISBN parameter is set
if (isset($_GET['isbn'])) {
    // Sanitize the input to prevent SQL injection
    $isbn = mysqli_real_escape_string($koneksi, $_GET['isbn']);
    
    // Use prepared statement to prevent SQL injection
    $query = mysqli_prepare($koneksi, "SELECT * FROM data_buku, kategori WHERE data_buku.kode = kategori.kode AND isbn_bk = ?");
    
    // Bind the ISBN parameter to the statement
    mysqli_stmt_bind_param($query, "s", $isbn);
    
    // Execute the query
    $result = mysqli_stmt_execute($query);

    if ($result) {
        $respon['msg'] = "Proses berhasil";

        $result = mysqli_stmt_get_result($query);

        while ($row = mysqli_fetch_assoc($result)) {
            $bookData = [
                "isbn_bk" => $row['isbn_bk'],
                "judul_bk" => $row['judul_bk'],
                "kode" => $row['nama'],
                "penulis_bk" => $row['penulis_bk'],
                "sinop_bk" => $row['sinop_bk'],
                "cover_bk" => $row['cover_bk'],
                "file_bk" => $row['file_bk']
            ];

            $respon['body']['data'][] = $bookData;
        }
    } else {
        $respon['status'] = 401;
        $respon['msg'] = "Proses gagal, ada masalah di database: " . mysqli_error($koneksi);
    }

    // Close the prepared statement
    mysqli_stmt_close($query);
} else {
    $respon['status'] = 400;
    $respon['msg'] = "Parameter ISBN tidak diberikan";
}

// Close the database connection


echo json_encode($respon);
?>