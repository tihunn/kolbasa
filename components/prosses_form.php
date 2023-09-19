<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Initialize an empty array for storing merchandise data
    $merchandiseData = [];

    // Loop through each input field to collect data
    foreach ($_POST['quantity'] as $article => $quantity) {
        // Check if the quantity is greater than 0
        if ($quantity > 0) {
            // Store the article and quantity in the array
            $merchandiseData[$article] = $quantity;
        }
    }

    // Serialize the merchandise data into a string
    $merchandiseDataString = json_encode($merchandiseData);

    // Set a cookie to store the merchandise data
    setcookie("merchandise_data", $merchandiseDataString, time() + 3600, "/"); // Cookie expires in 1 hour

    // Redirect back to the form page or another desired location
    header("Location: your_form_page.html");
    exit();
}
?>