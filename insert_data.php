<?php
    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'bikeservice');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the data from the form
    $customer_name = $_POST['customer_name'];
    $bike_type = $_POST['bike_type'];
    $service_date = $_POST['service_date'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];

    // Insert the data into the database
    $sql = "INSERT INTO reviews (customer_name, bike_type, service_date, rating, feedback) VALUES ('$customer_name', '$bike_type', '$service_date', '$rating', '$feedback')";

    if ($conn->query($sql) === TRUE) {
        echo "Review successfully submitted.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
?>







