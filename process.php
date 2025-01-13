<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $file = fopen("data.html", "a");
    fwrite($file, $name . "\n");
    fclose($file);
    echo "Data written to file.";
}
?>
