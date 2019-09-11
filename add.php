<?php
    if (isset($_POST['submit'])) {
        $data_missing = array();
        if (empty($_POST['name'])) {
            $data_missing[] = 'name';
        } else {
            $val_name = trim($_POST['name']);
        }

        if (empty($_POST['gift'])) {
            $data_missing[] = 'gift';
        } else {
            $val_gift = trim($_POST['gift']);
        }
        if (empty($_POST['dateDonate'])) {
            $val_date = date('Y-m-d');
        } else {
            $val_date = trim($_POST['dateDonate']);
        }
        if (empty($data_missing)) {
            require_once('mysql.php');
            $query = "INSERT INTO donator1(name, gift, date, donator_id) VALUES (?, ?, ?, NULL)";
            $stmt = mysqli_prepare($dbc, $query);
            mysqli_stmt_bind_param($stmt, "sss", $val_name, $val_gift, $val_date);
            mysqli_stmt_execute($stmt);
            $affected_rows = mysqli_stmt_affected_rows($stmt);
            if ($affected_rows == 1) {
                echo 'Donate success';
                mysqli_stmt_close($stmt);
                mysqli_close($dbc);
                Header("Location: http://localhost:8080/Desktop/code/php/web/donate.php");
            } else {
                echo 'Error Occurred <br>';
                echo mysqli_error();
            }
        } else {
            echo "Something is lacked";
            foreach($data_missing as $val) {
                echo "$val<br>";
            }
        }
    }    
?>