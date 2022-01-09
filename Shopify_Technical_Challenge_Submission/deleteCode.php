<!--Author: tomi-->
<!--Date: 06/01/2022-->
<!--Description: A process to deleting a record-->

<?php

// Include config file
require_once("lib/config.php");
$invId = "";
// Process delete operation after confirmation

if (isset($_GET["invid"]) && !empty($_GET["invid"])) {
    //Sanitize the parameter
    $invId = $mysqli->real_escape_string($_GET['invid']);
    // example UPDATE query
    $query = "DELETE FROM inventory WHERE inventory.inv_id = $invId";
    $result = $mysqli->query($query);

    $mysqli->close();

    if ($result) {
        echo "<p>Inventory Deleted successfully. Go Back <a href='index.php'>Home</a></p>";
    } else {
        echo "<p>There was an error. <a>Go back</a></p>";
    }

}