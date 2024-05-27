<?php
// header('Content-Type: application/json');

// require_once('db.php');
$conn = require 'connect_to_db.php';

$sqlquery = 'SELECT destination, no_of_dedicated_clients FROM delivery_destinations ORDER BY no_of_dedicated_clients';

$results = $conn->query($sqlquery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

// mysqli_close($conn);
$conn->close();

return json_encode($data);
?>