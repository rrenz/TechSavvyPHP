<?php
include 'database_connection.php';

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="mb-2 p-2 border rounded flex items-center justify-between">';
        echo '<div>';
        echo '<i class="fas fa-user mr-2"></i>';
        echo '<span>' . $row["name"]. '</span>';
        echo '</div>';
        echo '<span>' . $row["contact"]. '</span>';
        echo '</div>';
    }
} else {
    echo "No contacts found";
}

$conn->close();
?>