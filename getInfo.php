<?php

require_once('mysql.php');

$query = "SELECT name, gift, date FROM donator1 ORDER BY date DESC";

$response = @mysqli_query($dbc, $query);

if ($response) {
    echo '<table align = "left"
    cellspacing = "5" cellpading = "8">
    <tr>
        <td align = "left"><b>name</b></td>
        <td align = "left"><b>gift</b></td>
        <td align = "left"><b>date</b></td>
    </tr>';

    while ($row = mysqli_fetch_array($response)) {
        echo '<tr>
        <td align = "left">' . $row['name'] . '</td>' .
        '<td align = "left">' . $row['gift'] . '</td>' .
        '<td align = "left">' . $row['date'] . '</td></tr>';
    }
    
    echo '</table>';
} else {
    echo "Couldn't issue database query";
    echo mysqli_error($dbc);
}

mysqli_close($dbc);

?>