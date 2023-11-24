<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $service = $_POST["service"];
    $serviceDate = $_POST["service-date"];
    
    // Define a file path for saving form submissions
    $file = "form_submissions.txt";
    
    // Format the data as a string
    $submission = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nService Date: $serviceDate\n\n";
    
    // Save the data to a text file
    file_put_contents($file, $submission, FILE_APPEND | LOCK_EX);
    
    // Display a confirmation message
    echo "Thank you for submitting the form, $name!";
} else {
    // Handle invalid requests
    echo "Invalid request.";
}
?>
