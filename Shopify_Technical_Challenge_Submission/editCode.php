<?php
$invId = $_GET['invid'];
$invWeight = $_GET['weight'];
$invHeight = $_GET['height'];
$invLength = $_GET['length'];
$invWidth = $_GET['width'];
$invReceived = $_GET['received'];
$invSent = $_GET['sent'];
$invAisle = $_GET['aisle'];
$invShelfNo = $_GET['shelfNumber'];

if (empty($invWeight) || empty($invHeight) || empty($invLength) || empty($invWidth) || empty($invReceived) || empty($invAisle) || empty($invShelfNo)) {

    echo "You have not entered all the required details.<br />"
        . "Please <a href='add.php'>go back</a> and try again.</body></html>";
    exit();

}

require_once('lib/config.php');

$invId = $mysqli->real_escape_string($invId);
$invWeight = $mysqli->real_escape_string($invWeight);
$invHeight = $mysqli->real_escape_string($invHeight);
$invLength = $mysqli->real_escape_string($invLength);
$invWidth = $mysqli->real_escape_string($invWidth);
$invReceived = $mysqli->real_escape_string($invReceived);
$invSent = $mysqli->real_escape_string($invSent);
$invAisle = $mysqli->real_escape_string($invAisle);
$invShelfNo = $mysqli->real_escape_string($invShelfNo);

if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database.  Please try again later.";
    exit;
}

$query = "UPDATE inventory SET inv_weight=$invWeight, inv_height=$invHeight, inv_length=$invLength, inv_width=$invWidth, inv_received='$invReceived', inv_sent='$invSent', inv_aisle=$invAisle, inv_shelf_no=$invShelfNo WHERE inventory.inv_id=$invId LIMIT 1";
$result = $mysqli->query($query);


if ($result) {
    echo "<p>Inventory Updated successfully. Go Back <a href='index.php'>Home</a></p>";
} else {
    echo "<p>There was an error. <a>Go back</a></p>";
}