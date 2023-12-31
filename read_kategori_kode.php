<?php

include "env.php";


if (isset($_GET['kode'])) {
    $kode = $_GET['kode'];

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT * FROM kategori WHERE kode = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $kode);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo json_encode(array("status" => "success", "data" => $data));
    } else {
        echo json_encode(array("status" => "error", "message" => "Category not found"));
    }

    $stmt->close();
} else {
    echo json_encode(array("status" => "error", "message" => "kode parameter not provided"));
}

$koneksi->close();
?>
