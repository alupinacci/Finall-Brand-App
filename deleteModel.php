<?php

include 'dbConnection.php'; 

$Model_id = $_GET['Model_id'];

$sql = "DELETE FROM models WHERE id= $Model_id";

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