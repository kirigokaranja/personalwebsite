<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 27/10/2018
 * Time: 13:10
 */

include ('connect.php');

$sql = "SELECT * FROM emails";
if($result = mysqli_query($db, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>No</th>";
        echo "<th>Date</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['NoEmails'] . "</td>";
            echo "<td>" . $row['Date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
}