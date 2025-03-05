<?php
header('Content-Type: application/json');

// Database connection
include_once '../includes/db_func.php';

// Get pagination parameters
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$size = isset($_GET['size']) ? (int)$_GET['size'] : 10;
$uac = isset($_GET['uac']) ? (int)$_GET['uac'] : 0;
$uid = isset($_GET['uid']) ? (int)$_GET['uid'] : 0;
$offset = ($page - 1) * $size;

// Get filter parameters
$filters = isset($_GET['filter']) ? $_GET['filter'] : [];

// Query to get total number of rows
$total_sql = "SELECT COUNT(*) as total FROM work_order";
if($uac < 2) {
    $total_sql .= " WHERE status > 0 AND assign_to = $uid";
}

// Apply filters to the total count query
foreach ($filters as $filter) {
    $field = $filter['field'];
    $filter_type = strtoupper($filter['type']);
    if($filter_type == 'LIKE') {
        $value = "%".$filter['value']."%";
    } else {
        $value = $filter['value'];
    }
    $total_sql .= " AND $field $filter_type '$value'";
}

$total_result = $conn->query($total_sql);
$total_row = $total_result->fetch_assoc();
$total_rows = intval($total_row['total']);
$last_page = ceil($total_rows / $size);

// Query the work_order table with pagination
$sql = "SELECT wo.wo_id, wo.wo_no, wo.level, wo.status, wo.request_date, wo.assign_to
        FROM work_order wo";
if($uac < 2) {
    $sql .= " WHERE status > 0 AND assign_to = $uid";
}

// Apply filters to the main query
foreach ($filters as $filter) {
    $field = $filter['field'];
    $filter_type = strtoupper($filter['type']);
    if($filter_type == 'LIKE') {
        $value = "%".$filter['value']."%";
    } else {
        $value = $filter['value'];
    }
    // $sql .= " AND $field $filter_type '$value'";
}

$sql .= " LIMIT $offset, $size";
// die($sql);
$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $wo_id = $row['wo_id'];

        // Query to get items for each work order
        $items_sql = "SELECT i.id, i.item AS name, i.oem_serial, i.svp_serial
                      FROM wo_items woi
                      JOIN inventory i ON woi.item_id = i.id
                      WHERE woi.wo_id = $wo_id";
        $items_result = $conn->query($items_sql);

        $items = [];
        if ($items_result->num_rows > 0) {
            while($item_row = $items_result->fetch_assoc()) {
                $items[] = $item_row;
            }
        }

        $row['items'] = $items;
        $data[] = $row;
    }
}

$response = [
    'page' => $page,
    'size' => $size,
    'total' => $total_rows,
    'last_page' => $last_page,
    'data' => $data
];

echo json_encode($response);

$conn->close();
?>