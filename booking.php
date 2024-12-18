<?php
    ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Appointment</title>
    <link rel="stylesheet" href="pages/assets/css/booking.css">
    <style>

    </style>
</head>
<body>
    <main class="booking-container">
        <div class="headertop">
            <img src="pages/assets/images/logo.png" alt="">
            <h1>Welcome to F&F Interior Designs</h1>
        </div>
        <form class="booking-form" method="post" id="appointmentForm">
        <h2 class="appointment-heading">Booking for Appointment</h2>

            <div class="form-group">
                <label for="fullName" class="form-label">Full Name:</label>
                <input type="text" id="fullName" name="fullName" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="tel" id="phone" name="phone" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="address" class="form-label">Address (Optional):</label>
                <input type="text" id="address" name="address" class="form-input">
            </div>

            <div class="form-group">
                <label for="preferredDate" class="form-label">Preferred Date:</label>
                <input type="date" id="preferredDate" name="preferredDate" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="preferredTime" class="form-label">Preferred Time:</label>
                <input type="time" id="preferredTime" name="preferredTime" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="serviceType" class="form-label">Service Type:</label>
                <select id="serviceType" name="serviceType" class="form-select" required>
                    <option value="">Select a service</option>
                    <option value="consultation">Consultation</option>
                    <option value="designConcept">Design Concept</option>
                    <option value="layoutPlanning">Layout Planning</option>
                </select>
            </div>

            <div class="form-group">
                <label for="budget" class="form-label">Budget Range (Optional):</label>
                <input type="text" id="budget" name="budget" class="form-input">
            </div>

            <div class="form-group">
                <label for="designPreferences" class="form-label">Design Preferences:</label>
                <textarea id="designPreferences" name="designPreferences" class="form-textarea"></textarea>
            </div>

            <div class="form-group">
                <label for="locationType" class="form-label">Appointment Location:</label>
                <select id="locationType" name="locationType" class="form-select" required>
                    <option value="">Select location type</option>
                    <option value="onSite">On-Site Consultation</option>
                    <option value="virtual">Virtual Consultation</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Reminder Preferences:</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="emailReminder" name="reminder[]" value="Email"><label for="emailReminder">Email Reminder</label>
                    <input type="checkbox" id="smsReminder" name="reminder[]" value="Phone"><label for="smsReminder">SMS Reminder</label>
                </div>
            </div>

            <button type="submit" name="btn" class="submit-button">Book Appointment</button>
        </form>
    </main>
    <?php

// Create a connection to the database
$connect = new mysqli("localhost", "root", "", "ff_interior_designs");

// Check if the connection was successful
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["fullName"];
    $email = $_POST["email"];
    $mobile = $_POST["phone"];
    $address = $_POST["address"];
    $date = $_POST["preferredDate"];
    $time = $_POST["preferredTime"];
    $service = $_POST["serviceType"];
    $budget = $_POST["budget"];
    $designPreferance = $_POST["designPreferences"];
    $locationType = $_POST["locationType"];
    $reminder = implode(", ", $_POST["reminder"]);

    // Prepare the SQL query
    $query = "INSERT INTO `booking_appointment`(`FullName`, `Email`, `Phone`, `Address`, `Preferred_Date`, `Preferred_Time`, `Services_Type`, `Budget`, `Design_Preferance`, `Appointment_Location`, `Reminder`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $connect->prepare($query);

    // Bind the parameters
    $stmt->bind_param("sssssssssss", $name, $email, $mobile, $address, $date, $time, $service, $budget, $designPreferance, $locationType, $reminder);

    // Execute the query
    if ($stmt->execute()) {
        echo "Booking Appointment Success";
        header("Location: pages/home.php");
        ob_end_flush();
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$connect->close();

?>
</body>
</html>
