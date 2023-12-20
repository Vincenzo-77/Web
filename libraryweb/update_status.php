<?php
include 'dbcon.php';
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'status' parameter is received via POST
    if (isset($_POST['status'])) {
        // Sanitize the received status value for security (to prevent SQL injection)
        $status = $_POST['status'];

        // Assuming you have the studentNo or some unique identifier for the request
        // Replace 'your_unique_identifier_column' with your actual column name
        $studentNo = 'studentNo';

        // Prepare and execute the SQL update statement
        $sql = "UPDATE request SET status_req = ? WHERE studentNo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $status, $studentNo);
        $stmt->execute();

        // Check if the update was successful
        if ($stmt->affected_rows > 0) {
            echo "Status updated successfully";
        } else {
            echo "Error updating status: " . $conn->error;
        }

        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Status value not received";
    }
} else {
    echo "Invalid request method";
}
?>
