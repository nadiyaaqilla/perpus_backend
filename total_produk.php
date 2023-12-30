<?php
$res = [
    "status" => 200,
    "msg" => "",
    "body" => "",
];

$koneksi = mysqli_connect('localhost', 'root', '', 'e-perpus');

// Query to count the number of rows in the table 'data_buku'
$sql = "SELECT COUNT(*) AS total_buku FROM data_buku";
$result = $koneksi->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();
    
    // Get the total number of books
    $total_buku = $row['total_buku'];

    // Assign the total to the 'body' key in $res
    $res['body'] = array('total' => $total_buku);

    // Encode the response as JSON and echo it
    echo json_encode($res);
} else {
    // If the query fails, set an error response in 'msg' key
    $res['msg'] = 'Failed to retrieve data';

    // Encode the error response as JSON and echo it
    echo json_encode($res);
}

// Close the database connection
$koneksi->close();
?>
