<?php
include 'db.php';

$sql = "SELECT * FROM complaints";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Complaints</title>
</head>
<body>
    <h2>Complaints List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Complaint</th>
            <th>Status</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["user"]. "</td>
                        <td>" . $row["complaint"]. "</td>
                        <td>" . $row["status"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No complaints found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
