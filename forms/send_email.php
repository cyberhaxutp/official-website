<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Set path to save form data
    $file_path = 'form_data.txt'; // Adjust path as needed
    
    // Build the data to write
    $data = "Name: $name\n";
    $data .= "Email: $email\n";
    $data .= "Message:\n$message\n";
    $data .= "--------------------------------------\n";
    
    // Write to file (append mode)
    if (file_put_contents($file_path, $data, FILE_APPEND | LOCK_EX) !== false) {
        echo "Your message has been saved successfully.";
    } else {
        echo "There was a problem saving your message. Please try again later.";
    }
} else {
    echo "Error: Method not allowed.";
}
?>
