<?php
echo "<h2>PHP Practice Page</h2>";

/* BASIC PHP */
$x = 10;
$y = 20;
$sum = $x + $y;

echo "Basic PHP Example: 10 + 20 = $sum <br><br>";

/* GET Example */
if (isset($_GET['name'])) {
    echo "GET Name: " . $_GET['name'] . "<br>";
}

/* POST Example — FIXED */
if (isset($_POST['username'])) {

    echo "<h3>POST Form Data</h3>";

    echo "Username: " . $_POST['username'] . "<br>";
    echo "Mobile: " . $_POST['mobile'] . "<br>";
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Password: " . $_POST['password'] . "<br>";
}
?>
