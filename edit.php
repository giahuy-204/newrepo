<?php
    require_once('mysql.php');
    $id = $_POST['id'];
    echo $id;
    if (isset($_POST["name"]) || isset($_POST["gift"]) || isset($_POST["dateEdit"])) {
        $query1 = "UPDATE donator1 SET ";
        if (isset($_POST["name"]))
            $query1 .= 'name="' . $_POST["name"] . '"';
        if (isset($_POST["gift"]))
            $query1 .= ', gift="' . $_POST["gift"] . '"';
        if (isset($_POST["dateEdit"]))
            $query1 .= ', date="' . $_POST["dateEdit"] . '"';
        $query1 .= ' WHERE donator_id=' . $id;
        echo $query1;
        $response = @mysqli_query($dbc, $query1);
        if ($response) {
            echo "Record edited successfully";
            mysqli_close($dbc);
            Header("Location: http://localhost:8080/Desktop/code/php/web/donate.php");
        } else {
            echo "Error edit record: " . mysqli_error();
        }
    }
?>