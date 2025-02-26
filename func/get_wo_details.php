<?php
include_once '../includes/db_func.php';

if (isset($_GET['id'])) {
    $workOrderId = intval($_GET['id']);

    $sql = "SELECT wo.wo_no, wo.level, wo.status, wo.request_date, 
          i.item, i.oem_serial,
          GROUP_CONCAT(CONCAT(wot.test_type) SEPARATOR ', ') AS test_results,
          u1.fullname AS created_by, u2.fullname AS assign_to
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

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if (!isset($displayed)) {
                switch ($row['status']) {
                  case 0:
                    $status =  "Created";
                    break;
                  case 1:
                    $status =  "Approved";
                    break;
                  case 2:
                    $status =  "Assigned";
                    break;
                  case 3:
                    $status =  "Completed";
                    break;
                  default:
                    $status =  "Unknown";
                    break;
                }
                echo "<h3>Work Order No: {$row['wo_no']}</h3>
                  <p>Level: {$row['level']}</p>
                    <p>Status: {$status}</p>
                  <p>Request Date: " . date('H:i - d/m/Y', strtotime($row['request_date'])) . "</p>
                  <p>INSPECTIONS: ".strtoupper($row['test_results'])."</p>
                  <p>Created By: {$row['created_by']}</p>
                  <p>Assigned To: {$row['assign_to']}</p>";
              $displayed = true;
            }
            echo "<p>Item: {$row['item']} ({$row['oem_serial']})</p>";
          }
    } else {
        echo "No work order found.";
    }

    $stmt->close();
}
?>