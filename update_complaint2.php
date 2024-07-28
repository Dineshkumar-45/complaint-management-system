<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql = "UPDATE complaints SET status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Complaint status updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Complaint Status</title>
</head>
<body>
    <h2>Update Complaint Status</h2>
    <form method="post" action="update_complaint.php">
        <label for="id">Complaint ID:</label><br>
        <input type="number" id="id" name="id" required><br>
        <label for="status">Status:</label><br>
        <select id="status" name="status">
            <option value="Pending">Pending</option>
            <option value="Resolved">Resolved</option>
        </select><br><br>
        <input type="submit" value="Update Status">
    </form>
</body>
</html>
