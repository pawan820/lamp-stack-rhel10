<?php
$conn = new mysqli("localhost", "lampuser", "YOUR_PASSWORD", "lampdb");

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, department, email FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>LAMP Stack Project</title>
</head>
<body>
    <h1>RHEL 10 - LAMP Stack Project</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
        </tr>

        <?php
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["department"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                echo "</tr>";
            }
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
