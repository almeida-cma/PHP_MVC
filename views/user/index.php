<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
}
?>
<a href="../public/index.php?action=create">Create New User</a>
