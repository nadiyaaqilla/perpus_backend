<?php
include 'env.php';
$response = [
    'kode' => '',
    'msg' => '',
    'body' => [
        'data' => []
    ]
];

// $data['kode'] = $_POST['kode'];
$data['nama'] = $_POST['nama'];

$response['body']['data'] = $data;



//koneksi
// $kode = $data['kode'];
$nama = $data['nama'];
$q = mysqli_query($koneksi, "INSERT INTO kategori(nama) VALUES('$nama')");

if($q){
    $response['kode'] = 200;
    $response['msg'] = "insert berhasil";
}else{
    $response['kode'] = 400;
    $response['msg'] = "insert gagal";
}

//query insert



echo json_encode($response);

?>