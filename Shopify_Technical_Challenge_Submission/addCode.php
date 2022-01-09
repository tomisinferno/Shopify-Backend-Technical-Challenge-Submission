<?php
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

//Query to add values into database
$query = "INSERT INTO inventory VALUES (NULL, '" . $invWeight . "', '" . $invHeight . "', '" . $invLength . "', '" . $invWidth . "', '" . $invReceived . "', '" . $invSent . "', '" . $invAisle . "', '" . $invShelfNo . "')";
//echo $query;
$result = $mysqli->query($query);

if ($result) {
    echo "<p>Inventory Added successfully. Go Back <a href='index.php'>Home</a></p>";
} else {
    echo "<p>There was an error. <a href='add.php'>Go back</a></p>";
}