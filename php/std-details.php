<!DOCTYPE html>
<html>
<head>
    <title>Student Details Form</title>
</head>
<body>

<h2>Enter Student Details</h2>

<form method="post">
    <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Address:</label>
    <textarea name="address" rows="3" cols="30" required></textarea><br><br>

    <label>Gender:</label>
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other<br><br>

    <label>Date of Birth:</label>
    <input type="date" name="dob" required><br><br>

    <input type="submit" value="Submit">
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Read input using $_REQUEST
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $address = $_REQUEST["address"];
    $gender = $_REQUEST["gender"];
    $dob = $_REQUEST["dob"];

    echo "<h3>Student Details</h3>";
    echo "<b>Name:</b> $name <br>";
    echo "<b>Email:</b> $email <br>";
    echo "<b>Address:</b> $address <br>";
    echo "<b>Gender:</b> $gender <br>";
    echo "<b>Date of Birth:</b> $dob <br>";
}
?>

</body>
</html>
