<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'] ?? '';
    if (!empty($name)) {
        $file = 'history.txt';
        $current = file_get_contents($file);
        $current .= $name . PHP_EOL;
        file_put_contents($file, $current);
    }
}
?>
