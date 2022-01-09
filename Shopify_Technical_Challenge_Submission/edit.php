<!--Author: tomi-->
<!--Date: 06/01/2022-->
<!--Description: A Process to Delete inventory-->
<?php

// extract the GET variable isbn
if (isset($_GET['invid'])) {

    //id exist in the url
    $invId = $_GET['invid'];

    // connect to db
    require("lib/config.php");

    $invId = $mysqli->real_escape_string($invId);

    // get the data for just the inventory we want to edit!
    $query = "SELECT * FROM inventory WHERE inventory.inv_id = $invId";
    $result = $mysqli->query($query);

    $num_results = $result->num_rows;

    if ($num_results == 0) {
        $message = "inventory not found.";
    } else {
        $row = $result->fetch_assoc();
        $invWeight = $row['inv_weight'];
        $invHeight = $row['inv_height'];
        $invLength = $row['inv_length'];
        $invWidth = $row['inv_width'];
        $invReceived = $row['inv_received'];
        $invSent = $row['inv_sent'];
        $invAisle = $row['inv_aisle'];
        $invShelfNo = $row['inv_shelf_no'];
    }

    $result->free();
    $mysqli->close();
} else {
    //the id is not provided
    $message = "Sorry, no id provided.";
}
?>
<!doctype html>
<html>
<head>
    <title>Inventory Delete</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">

    <h1>Inventory - Edit</h1>
    <?php
    // if message gets set above it means there is a problem and we don't have a inventory with that id to edit or it isn't provided
    if (isset($message)) {
        echo $message;
    } else {
        // we have all we need so let's display the inventory
        ?>

        <div>

            <form action="editCode.php? " method="GET">

                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Editing Inventory</legend>
                    <div class="form-group">
                        <label for="isbn">Weight:</label>
                        <input type="number" class="form-control" id="weight" value='<?php echo $invWeight ?>'
                               name="weight">
                    </div>
                    <div class="form-group">
                        <label for="author">Height:</label>
                        <input type="number" class="form-control" id="height" value='<?php echo $invHeight ?>'
                               name="height">
                    </div>
                    <div class="form-group">
                        <label for="title">Length:</label>
                        <input type="number" class="form-control" id="length" value='<?php echo $invLength ?>'
                               name="length">
                    </div>
                    <div class="form-group">
                        <label for="price">Width</label>
                        <input type="number" class="form-control" id="width" value='<?php echo $invWidth ?>'
                               name="width">
                    </div>
                    <div class="form-group">
                        <label for="price">Received</label>
                        <input type="date" class="form-control" id="received" value='<?php echo $invReceived ?>'
                               name="received">
                    </div>
                    <div class="form-group">
                        <label for="price">Sent</label>
                        <input type="date" class="form-control" id="sent" value='<?php echo $invSent ?>' name="sent">
                    </div>
                    <div class="form-group">
                        <label for="price">Aisle</label>
                        <input type="number" class="form-control" id="aisle" value='<?php echo $invAisle ?>'
                               name="aisle">
                    </div>
                    <div class="form-group">
                        <label for="price">Shelf Number (#.#)</label>
                        <input type="number" step=".1" class="form-control" id="shelfNumber"
                               value='<?php echo $invShelfNo ?>' name="shelfNumber">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" value='<?php echo $invId ?>' name="invid">
                        <p class="warning"><em>Note: You are about to edit a record. Are you sure you want to edit a
                                record?</em></p>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Edit</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php
    } // close the if no inventory found $message above
    ?>
</body>
</html>
