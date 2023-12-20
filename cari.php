<?php 
$response = [
    "status" => 200,
    "msg" => "Search successful",
    "body" => [
        "data" => []
    ]
];

include "env.php";

// Check if 'cari' is set in the $_GET array
if (isset($_GET['cari'])) {
    // Get the search term from the AJAX request
    $cari = mysqli_real_escape_string($koneksi, $_GET['cari']);

    // Perform a search query (replace with your actual query)
    $query = "SELECT * FROM data_buku WHERE judul_bk LIKE '%$cari%' OR sinop_bk LIKE '%$cari%'";
    $result = mysqli_query($koneksi, $query);

    $searchResults = [];

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $searchResult = [
                "isbn_bk" => $row['isbn_bk'],
                "judul_bk" => $row['judul_bk'],
                "nama_kategori" => $row['nama_kategori'],
                "penulis_bk" => $row['penulis_bk'],
                "sinop_bk" => $row['sinop_bk'],
                "cover_bk" => $row['cover_bk']
            ];
            $response['body']['data'][] = $searchResult;
            
        }
    } else {
        $response['status'] = 401;
        $response['msg'] = "Proses gagal, ada masalah di database";
    }
} else {
    // 'cari' is not set in the request
    $response['status'] = 400;
    $response['msg'] = "'cari' is required in the request.";
}

echo json_encode($response);

mysqli_close($koneksi);
?>
