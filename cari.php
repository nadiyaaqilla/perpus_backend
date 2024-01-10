<?php 
$response = [
    "status" => 200,
    "msg" => "Search successful",
    "body" => [
        "data" => []
    ]
];

include "env.php";

// Check if 'search' is set in the $_GET array
if (isset($_GET['search'])) {
    // Get the search term from the AJAX request
    $search = mysqli_real_escape_string($koneksi, $_GET['search']);

    // Perform a search query (replace with your actual query)
    $query = "SELECT * FROM data_buku
              JOIN kategori ON data_buku.kode = kategori.kode
              WHERE judul_bk LIKE '%$search%' OR sinop_bk LIKE '%$search%'";
    $result = mysqli_query($koneksi, $query);

    
    $searchResults = [];

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $searchResult = [
                "isbn_bk" => $row['isbn_bk'],
                "judul_bk" => $row['judul_bk'],
                "kode" => $row['nama'],
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
    // 'search' is not set in the request
    $response['status'] = 400;
    $response['msg'] = "'search' is required in the request.";
}

echo json_encode($response);

mysqli_close($koneksi);
?>
