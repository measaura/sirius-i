<?php
// Database connection
include_once '../includes/db_func.php';

// Current datetime
$current_datetime = date('Y-m-d H:i:s');

// SQL query to delete records where exp_date is same or greater than current datetime
$sql = "DELETE FROM users WHERE exp_date <= '$current_datetime'";
// die($sql);
if ($conn->query($sql) === TRUE) {
    echo "Records deleted successfully";
} else {
    echo "Error deleting records: " . $conn->error;
}

// Close connection
$conn->close();
?>