<!doctype html>
<html>
<head>
    <title>Add Inventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">
    <h1>Inventory - Add</h1>
    <div>
        <form action="addCode.php" method="GET">
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Adding Inventory</legend>
                <?php
                $msg = "";

                if (isset($_GET["error"])) {

                    if ($_GET["error"] == 'empty') {

                        $msg = "You have not entered all the required details.";
                    } else if ($_GET["error"] == 'db') {

                        $msg = "DB error. Inventory not added.";
                    } else if ($_GET["error"] == 'noform') {

                        $msg = "You must fill out a new inventory form.";
                    }

                }
                echo "<p class='error'>$msg</p>";
                ?>

                <!--                Form to fill-->
                <div class="form-group">
                    <label for="isbn">Weight:</label>
                    <input type="number" class="form-control" id="weight" name="weight">
                </div>
                <div class="form-group">
                    <label for="author">Height:</label>
                    <input type="number" class="form-control" id="height" name="height">
                </div>
                <div class="form-group">
                    <label for="title">Length:</label>
                    <input type="number" class="form-control" id="length" name="length">
                </div>
                <div class="form-group">
                    <label for="price">Width</label>
                    <input type="number" class="form-control" id="width" name="width">
                </div>
                <div class="form-group">
                    <label for="price">Received (YYYY-MM-DD)</label>
                    <input type="date" class="form-control" id="received" name="received">
                </div>
                <div class="form-group">
                    <label for="price">Sent Received (YYYY-MM-DD)</label>
                    <input type="date" class="form-control" id="sent" name="sent">
                </div>
                <div class="form-group">
                    <label for="price">Aisle</label>
                    <input type="number" class="form-control" id="aisle" name="aisle">
                </div>
                <div class="form-group">
                    <label for="price">Shelf Number (#.#)</label>
                    <input type="number" step=".1" class="form-control" id="shelfNumber" name="shelfNumber">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Add inventory</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>