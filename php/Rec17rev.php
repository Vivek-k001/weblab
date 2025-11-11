<?php
if(isset($_POST['submit'])){
    $num = $_POST['number'];
    $rev = 0;
    $original = $num;

    while($num > 0){
        $digit = $num % 10;
        $rev = ($rev * 10) + $digit;
        $num = intval($num / 10);
    }

    echo "Original Number: $original <br>";
    echo "Reversed Number: $rev";
}
?>

<form method="post">
    Enter a number: <input type="text" name="number" required>
    <input type="submit" name="submit" value="Reverse">
</form>
