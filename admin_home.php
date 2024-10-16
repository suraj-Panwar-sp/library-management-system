<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="admin-container">
        <h2>Admin Home</h2>
        <a href="maintenance.php">Maintenance</a> |
        <a href="report.php">Report</a> |
        <a href="transaction.php">Transaction</a>
        <a href="admin_home.php" class="link top-right">Back</a>
        <a href="logout.php" class="link bottom-right">Logout</a>

        <h3>Product Details</h3>
        <table border="1">
            <tr>
                <th>Code No From</th>
                <th>Code No To</th>
                <th>Category</th>
            </tr>
            <?php
            $conn = new mysqli($servername, $username, $password, $dbname);
            $result = $conn->query("SELECT * FROM products");
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['code_no_from']}</td><td>{$row['code_no_to']}</td><td>{$row['category']}</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
