<?php
header('Access-Control-Allow-Origin: *');
$connection = new mysqli("localhost", "root", "", "latihan");
$data = mysqli_query($connection, "select * from produk");
$response = array();

if ($data) {
    while ($row = mysqli_fetch_assoc($data)) {
        $row['avatar'] = $row['avatar'];
        $response[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode(['data'=>$response]);
?>

