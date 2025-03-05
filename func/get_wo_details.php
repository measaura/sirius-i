<?php
header('Content-Type: application/json');
include_once '../includes/db_func.php';

if (isset($_GET['id'])) {
    $workOrderId = intval($_GET['id']);

    $sql = "SELECT wo.wo_no, wo.level, wo.status, wo.request_date, 
          i.item, i.oem_serial,
          GROUP_CONCAT(CONCAT(wot.test_type) SEPARATOR ', ') AS test_results,
          u1.fullname AS created_by, u2.fullname AS assign_to, wo.assign_to as assign_to_id
      FROM work_order wo
      JOIN wo_items woi ON wo.wo_id = woi.wo_id
      JOIN inventory i ON woi.item_id = i.id
      JOIN wo_tests wot ON woi.id = wot.item_id
      JOIN users u1 ON wo.created_by = u1.id
      JOIN users u2 ON wo.assign_to = u2.id
      WHERE wo.wo_id = ?
      GROUP BY wo.wo_id, woi.id";
    // die($sql);
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $workOrderId);
    $stmt->execute();
    $result = $stmt->get_result();

    $data = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if (!isset($data['wo_no'])) {
                $status_text = match ($row['status']) {
                    0 => "Created",
                    1 => "Approved",
                    2 => "Assigned",
                    3 => "Completed",
                    default => "Unknown",
                };
                $data = [
                    'wo_no' => $row['wo_no'],
                    'level' => $row['level'],
                    'status' => $row['status'],
                    'status_text' => $status_text,
                    'request_date' => date('d/m/Y @ H:i a', strtotime($row['request_date'])),
                    'test_results' => strtoupper($row['test_results']),
                    'created_by' => $row['created_by'],
                    'assign_to' => $row['assign_to'],
                    'assign_to_id' => $row['assign_to_id'],
                    'items' => []
                ];
            }
            $data['items'][] = [
                'item' => $row['item'],
                'oem_serial' => $row['oem_serial']
            ];
        }
    } else {
        $data = ['error' => 'No work order found.'];
    }

    echo json_encode($data);
    $stmt->close();
}
?>