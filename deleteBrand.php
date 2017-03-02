<?php

include 'dbConnection.php'; 

$Brand_id = $_GET['Brand_id'];

$sql = "DELETE FROM Brands WHERE id= $Brand_id";

$result = $conn->query($sql);


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();


?>
</div>
</body>
</html>   