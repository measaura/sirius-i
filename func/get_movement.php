<?php
header('Content-Type: application/json');

// Database connection
include_once '../includes/db_func.php';

// Get pagination parameters
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$size = isset($_GET['size']) ? (int)$_GET['size'] : 10;
$type = isset($_GET['type']) ? $_GET['type'] : 'all';
$year = isset($_GET['year']) ? $_GET['year'] : date('Y');
$offset = ($page - 1) * $size;

// Query to get total number of rows
$total_sql = "SELECT i.id, i.item FROM inventory i INNER JOIN inv_move m ON i.id = m.inv_id";
if($type != 'all') {
  $total_sql .= " WHERE i.item_type = '$type'";
  $sqlw = "AND";
}else{
  $sqlw = "WHERE";
};

if($type != 'all') {
    $total_sql .= " $sqlw YEAR(m.move_date) = $year";
}
$total_sql .= " GROUP BY i.id, i.item";
// die($total_sql);
$total_result = $conn->query($total_sql);
$total_row = $total_result->fetch_assoc();
$total_rows = $total_result->num_rows;
$last_page = ceil($total_rows / $size);

// Query the inventory table with pagination
$sql = "SELECT
    i.id,
    i.item,
    i.oem_serial,
    i.svp_serial,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 1 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS January,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 2 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS February,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 3 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS March,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 4 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS April,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 5 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS May,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 6 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS June,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 7 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS July,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 8 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS August,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 9 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS September,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 10 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS October,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 11 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS November,
    GROUP_CONCAT(
        CASE WHEN MONTH(m.move_date) = 12 
        THEN CONCAT(m.location, ' (', DATE_FORMAT(m.move_date,'%d/%m/%Y'), ')') 
        END ORDER BY m.move_date
    ) AS December
FROM inventory i";
if($type != 'all') {
    $sql .= " LEFT JOIN
    inv_move m ON i.id = m.inv_id";
}else{
    $sql .= " INNER JOIN
    inv_move m ON i.id = m.inv_id";
};

if($type != 'all') {
    $sql .= " WHERE i.item_type = '$type'";
    $sqlw = "AND";
}else{
    $sqlw = "WHERE";
};

if($year != '') {
  $sql .= " $sqlw YEAR(m.move_date) = $year";
};

$sql .= " GROUP BY i.id, i.item";
$sql .= " LIMIT $size OFFSET $offset";
// die($sql);
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