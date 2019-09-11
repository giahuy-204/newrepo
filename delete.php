<?php
//delete.php
require_once('mysql.php');
$id = $_POST['id'];
$query = "DELETE FROM donator1 WHERE donator_id=" . $id;
$response = @mysqli_query($dbc, $query);
if ($response) {
    echo "Record deleted successfully";
    mysqli_close($dbc);
    Header("Location: http://localhost:8080/Desktop/code/php/web/donate.php");
} else {
    echo "Error deleting record: " . mysqli_error();
}
?>



