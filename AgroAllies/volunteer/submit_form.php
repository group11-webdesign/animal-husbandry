<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    // Get form data
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $contactNumber = $_POST['contactNumber'];
    $volunteerPeriod = $_POST['volunteerPeriod'];

    // Set up email parameters
    $to = 'agroallies@gmail.com'; // Replace with your email address
    $subject = 'Volunteer Application';
    $message = "Email: $email\nFull Name: $fullName\nContact Number: $contactNumber\nVolunteer Period: $volunteerPeriod";

    // Send email
    $success = mail($to, $subject, $message);

    // Return a response to the client
    if ($success) {
        http_response_code(200);
        echo json_encode(['message' => 'Application submitted successfully!']);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'Error submitting application. Please try again later.']);
    }
} else {
    // Invalid request method or empty POST data
    http_response_code(400);
    echo json_encode(['message' => 'Invalid request.']);
}
?>
