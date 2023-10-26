
<?php
    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'bikeservice');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch the data from the database
    $sql = "SELECT id, customer_name, bike_type, service_date, rating, feedback FROM reviews";
    $result = $conn->query($sql);

    // Set the filename and header
    $filename = "reviews_" . date('Ymd') . ".csv";
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Expires: 0");

    // Create a file pointer
    $file = fopen('php://output', 'w');

    // Write the header row
    fputcsv($file, array('ID', 'Customer Name', 'Bike Type', 'Service Date', 'Rating', 'Feedback'));

    // Write the data to the CSV file
    while ($row = $result->fetch_assoc()) {
        fputcsv($file, $row);
    }

    // Close the file pointer and the connection
    fclose($file);
    $conn->close();
?>
