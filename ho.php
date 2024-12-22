<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the input data
    $name = htmlspecialchars($_POST['name']);
    $contact = htmlspecialchars($_POST['contact']);
    $email = htmlspecialchars($_POST['email']);

    // Display the collected data
    echo "<h2>Your Input:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Contact: " . $contact . "<br>";
    echo "Email: " . $email . "<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<h2>Contact Form</h2>
<
    Name: <input type="text" name="name" required><br><br>
    Contact: <input type="text" name="contact" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>