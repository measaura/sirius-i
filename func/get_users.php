<?php
header('Content-Type: application/json');

// Database connection
include_once '../includes/db_func.php';
if(isset($_SESSION['uid']) && $_SESSION['uid'] != '' && $_SESSION['uac'] == 5) {
    $id = $_SESSION['uid'];
    // Get pagination parameters
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $size = isset($_GET['size']) ? (int)$_GET['size'] : 10;
    // $id = isset($_GET['id']) ? $_GET['id'] : '';
    $offset = ($page - 1) * $size;

    // Query to get total number of rows
    $total_sql = "SELECT COUNT(*) as total FROM users";
    // if($id != '') {
    //     $total_sql .= " WHERE id = '$id'";
    // }
    $total_result = $conn->query($total_sql);
    $total_row = $total_result->fetch_assoc();
    $total_rows = $total_row['total'];
    $last_page = ceil($total_rows / $size);

    // Query the inventory table with pagination
    $sql = "SELECT u.id, u.username, u.password, u.fullname, u.company, u.emp_id, u.designation, u.mobile, u.avatar, u.logindate, u.islogin, ac.uac_type AS access_level
    FROM users u
    LEFT JOIN uac ac ON u.access_level = ac.uac_lvl";
    if($id != '') {
        $sql .= " WHERE u.id <> '$id'";
    }
    $sql .= " ORDER BY u.access_level DESC";
    // $sql .= " LIMIT $size OFFSET $offset";
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
}else{
    $response = [
        'error' => 'Unauthorized access'
    ];
}

echo json_encode($response);

$conn->close();
?>