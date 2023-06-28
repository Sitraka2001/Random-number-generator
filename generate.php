<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $min = $_POST['min'];
    $max = $_POST['max'];

    $randomNumber = rand($min, $max);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Random Number Generator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Random Number Generator</h1>
        <p>Generated Number: <?php echo $randomNumber; ?></p>
        <a href="index.php">Generate Again</a>
    </div>
</body>

</html>