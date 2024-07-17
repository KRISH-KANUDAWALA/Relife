<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = htmlspecialchars($_POST['first_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);

    // Validate and sanitize inputs (basic example)
    if (!empty($first_name) && !empty($email) && !empty($phone) && !empty($gender) && !empty($address)) {
        // Example of data processing (e.g., saving to a database)
        // For demonstration, we'll just echo the data

        echo "<h2>Form Data Submitted Successfully</h2>";
        echo "First Name: $first_name<br>";
        echo "Email: $email<br>";
        echo "Phone: $phone<br>";
        echo "Gender: $gender<br>";
        echo "Address: $address<br>";
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request method.";
}
?>
