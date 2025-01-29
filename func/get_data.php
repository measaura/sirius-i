<?php
header('Content-Type: application/json');

// Database connection
include_once '../includes/db_func.php';

// Get pagination parameters
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$size = isset($_GET['size']) ? (int)$_GET['size'] : 10;
$type = isset($_GET['type']) ? $_GET['type'] : 'all';
$offset = ($page - 1) * $size;

// Query to get total number of rows
$total_sql = "SELECT COUNT(*) as total FROM inventory";
if($type != 'all') {
    $total_sql .= " WHERE item_type = '$type'";
}
$total_result = $conn->query($total_sql);
$total_row = $total_result->fetch_assoc();
$total_rows = $total_row['total'];
$last_page = ceil($total_rows / $size);

// Query the inventory table with pagination
// $sql = "SELECT * FROM inventory";
$sql = "SELECT i.id, i.item, pcelu.union_size as nom_size, pcele.conn_type as end_conn, pinlu.union_size as pin_size, pinls.unionseal_dia as pin_seal, boxlu.union_size as box_size, boxls.unionseal_dia as box_seal, i.bore_diam, i.length, i.oem_serial, i.svp_serial, i.oem, i.coc, i.service, i.mwp 
FROM inventory i
 LEFT JOIN list_union pcelu ON i.nom_size = pcelu.union_id
 LEFT JOIN list_endconn pcele ON i.end_conn = pcele.conn_id
 LEFT JOIN list_union pinlu ON i.pin_size = pinlu.union_id
 LEFT JOIN list_unionseal pinls ON i.pin_seal = pinls.unionseal_id
 LEFT JOIN list_union boxlu ON i.pin_size = boxlu.union_id
 LEFT JOIN list_unionseal boxls ON i.pin_seal = boxls.unionseal_id";
if($type != 'all') {
    $sql .= " WHERE i.item_type = '$type'";
}
$sql .= " LIMIT $size OFFSET $offset";
$result = $conn->query($sql);

$response = [
    'page' => $page,
    'size' => $size,
    'last_page' => $last_page,
    'data' => []
];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $response['data'][] = $row;
    }
}

echo json_encode($response);

$conn->close();
?>