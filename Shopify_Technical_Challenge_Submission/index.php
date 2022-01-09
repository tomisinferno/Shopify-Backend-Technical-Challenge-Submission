<!doctype html>
<html>
<head>
    <title>Inventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

</head>
<body>

<div id="container">

    <h1>Inventory</h1>

    <?php

    require("lib/config.php");

    $query = "SELECT * FROM inventory";


    $result = $mysqli->query($query);

    $num_results = $result->num_rows;

    echo "<p>Number of inventories found: " . $num_results . "</p>";

    echo "<a href='add.php' class='btn btn-info' data-toggle='tooltip'>Add a New Inventory</a><br><br>";
    echo "<a href='export.php' class='btn btn-info' data-toggle='tooltip'>Export to CSV</a><br><br>";

    if ($num_results > 0) {
//  $result->fetch_all(MYSQLI_ASSOC) returns a numeric array of all the inventory retrieved with the query
        $inventories = $result->fetch_all(MYSQLI_ASSOC);
        echo "<table class='table table-bordered table-hover'><tr>";
//This dynamically retieves header names
        foreach ($inventories[0] as $k => $v) {

            echo "<th>$k</th>";

        }


        echo "</tr></thead>";
        echo "<tbody>";
//Create a new row for each inventory
        foreach ($inventories as $inventory) {
            echo "<tr>";
            $i = 0;

            foreach ($inventory as $k => $v) {

                if ($k == 'inv_id') {
                    echo "<td>" . $v . "</td>";
                    $invId = $v;
                } else {
                    echo "<td>" . $v . "</td>";
                }
                if (($i == count($inventory) - 1)) {
                    echo "<td >";
                    echo "<div class='btn-toolbar'>";
                    echo "<a href='edit.php?invid=" . $invId . "' title='Edit Record' class='btn btn-info btn-xs' data-toggle='tooltip'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg></a>";
                    echo "&nbsp&nbsp<a href='delete.php?invid=" . $invId . "' title='Delete Record' class='btn btn-info btn-xs' data-toggle='tooltip'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
  <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
</svg></a>";
                    echo "</div>";
                    echo "</td>";
                }
                $i++;
            }
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    }
    // free result and disconnect
    $result->free();
    $mysqli->close();


    ?>
</div>
</body>
</html>