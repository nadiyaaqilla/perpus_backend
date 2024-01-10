<?php
include 'env.php';

$response = [
    'status' => '',
    'msg' => '',
    'body' => [
        'data' => [
            'cover_bk' =>'',
            'isbn_bk' => '',
            'judul_bk' => '',
            'kode' => '',
            'penulis_bk' => '',
            'sinop_bk' => '',
            'file_bk' => '',
        ]
    ]
];

if (!$koneksi) {

    $response['status'] = 400;
    $response['msg'] = "data gagal diperbarui";
} else {

    $isbn_bk = $_POST['isbn_bk'];
    $judul_bk = $_POST['judul_bk'];
    $kode = $_POST['kode'];
    $penulis_bk = $_POST['penulis_bk'];
    // $file_bk = $_POST['file_bk'];
    $sinop_bk = mysqli_real_escape_string($koneksi, $_POST['sinop_bk']);

    // cek apakah user pilih cover_bk baru atau tidak
    if ($_FILES["cover_bk"]["name"] != "") {
        // ambil nama cover_bk lama
        $result = mysqli_query($koneksi, "SELECT cover_bk FROM data_buku WHERE isbn_bk = '$isbn_bk'");
        $data = mysqli_fetch_assoc($result);
        $cover_bk = $data['cover_bk'];

        
        // hapus cover_bk lama
        unlink($cover_bk);

        // upload cover_bk baru
        $temp = explode(".", $_FILES["cover_bk"]["name"]);
        $namacover_bkBaru = md5(date('dmy h:i:s')) . '.' . end($temp);
        $target_file = "file/" . $namacover_bkBaru;
        move_uploaded_file($_FILES["cover_bk"]["tmp_name"], $target_file);

        $response['body']['data']['cover_bk'] = 'file/img/' . $namacover_bkBaru;
        mysqli_query($koneksi, "UPDATE data_buku SET cover_bk = 'file/img/$namacover_bkBaru' WHERE isbn_bk = '$isbn_bk'");
    }

    // cek apakah user pilih file_bk baru atau tidak
    if ($_FILES["file_bk"]["name"] != "") {
        // ambil nama file_bk lama
        $result = mysqli_query($koneksi, "SELECT file_bk FROM data_buku WHERE isbn_bk = '$isbn_bk'");
        $data = mysqli_fetch_assoc($result);
        $file_bk = $data['file_bk'];

        // hapus file_bk lama
        unlink($file_bk);

        // upload file_bk baru
        $temp = explode(".", $_FILES["file_bk"]["name"]);
        $namafile_bkBaru = md5(date('dmy h:i:s')) . '.' . end($temp);
        $target_file = "file/" . $namafile_bkBaru;
        move_uploaded_file($_FILES["file_bk"]["tmp_name"], $target_file);

        $response['body']['data']['file_bk'] = 'file/' . $namafile_bkBaru;
        mysqli_query($koneksi, "UPDATE data_buku SET file_bk = 'file/$namafile_bkBaru' WHERE isbn_bk = '$isbn_bk'");
    }

    $response['status'] = 200;
    $response['msg'] = 'data berhasil diperbarui';
    $response['body']['data']['isbn_bk'] = $isbn_bk;
    $response['body']['data']['judul_bk'] = $judul_bk;
    $response['body']['data']['kode'] = $kode;
    $response['body']['data']['penulis_bk'] = $penulis_bk;
    $response['body']['data']['sinop_bk'] = $sinop_bk;

    mysqli_query($koneksi, "UPDATE data_buku
                            SET isbn_bk = '$isbn_bk', 
                                judul_bk = '$judul_bk', 
                                kode = '$kode',
                                penulis_bk = '$penulis_bk',
                                sinop_bk = '$sinop_bk'
                            WHERE isbn_bk = '$isbn_bk'");
}

echo json_encode($response);