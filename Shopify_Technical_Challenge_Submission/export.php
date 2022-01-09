<?php

require_once("lib/config.php");

$query = $mysqli->query("SELECT * FROM inventory ORDER BY inv_id ASC");

if ($query->num_rows > 0) {
    $delimiter = ",";
    $filename = "Inventory" . " " . date('Y_m_d__H_I') . ".csv";

    // Create a file pointer
    $f = fopen('php://memory', 'w');

    // Set column headers
    $fields = array('inv_id', 'inv_weight', 'inv_height', 'inv_length', 'inv_width', 'inv_received', 'inv_sent', 'inv_aisle', 'inv_shelf_no');
    fputcsv($f, $fields, $delimiter);

    // Output each row of the data, format line as csv and write to file pointer
    while ($row = $query->fetch_assoc()) {
        $lineData = array($row['inv_id'], $row['inv_weight'], $row['inv_height'], $row['inv_length'], $row['inv_width'], $row['inv_received'], $row['inv_sent'], $row['inv_aisle'], $row['inv_shelf_no']);
        fputcsv($f, $lineData, $delimiter);
    }

    // Move back to beginning of file
    fseek($f, 0);

    // Set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;
