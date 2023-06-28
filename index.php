<!DOCTYPE html>
<html>

<head>
    <title>Random Number Generator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Random Number Generator</h1>
        <form method="post" action="generate.php">
            <label for="min">Minimum:</label>
            <input type="number" name="min" id="min" required>
            <br>
            <label for="max">Maximum:</label>
            <input type="number" name="max" id="max" required>
            <br>
            <input type="submit" value="Generate">
        </form>
    </div>
</body>

</html>