<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $complaint = $_POST['complaint'];

    $sql = "INSERT INTO complaints (user, complaint) VALUES ('$user', '$complaint')";

    if ($conn->query($sql) === TRUE) {
        echo "New complaint added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Complaint</title>
</head>
<body>
    <h2>Add Complaint</h2>
    <form method="post" action="add_complaint.php">
        <label for="user">Your Name:</label><br>
        <input type="text" id="user" name="user" required><br>
        <label for="complaint">Complaint:</label><br>
        <textarea id="complaint" name="complaint" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
