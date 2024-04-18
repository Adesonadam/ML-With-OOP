<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/ComplexNumber.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input data
    $realPart1 = $_POST['real_part1'] ?? 0;
    $imaginaryPart1 = $_POST['imaginary_part1'] ?? 0;
    $realPart2 = $_POST['real_part2'] ?? 0;
    $imaginaryPart2 = $_POST['imaginary_part2'] ?? 0;
    $operation = $_POST['operation'] ?? '';

    // Create the first complex number
    $complexNumber1 = new ComplexNumber($realPart1, $imaginaryPart1);

    // Create the second complex number
    $complexNumber2 = new ComplexNumber($realPart2, $imaginaryPart2);

    // Perform the selected operation
    $result = null;
    switch ($operation) {
        case 'addition':
            $result = $complexNumber1->add($complexNumber2);
            break;
        case 'subtraction':
            $result = $complexNumber1->subtract($complexNumber2);
            break;
        case 'multiplication':
            $result = $complexNumber1->multiply($complexNumber2);
            break;
        default:
            $message = "Invalid operation selected.";
    }

    // Prepare the message
    if ($result) {
        $message = "Result of $operation: $result";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complex Number Arithmetic</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Complex Number Arithmetic</h1>
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="real_part1">Real Part (First Number):</label><br>
        <input type="number" id="real_part1" name="real_part1" value="0" required><br><br>
        <label for="imaginary_part1">Imaginary Part (First Number):</label><br>
        <input type="number" id="imaginary_part1" name="imaginary_part1" value="0" required><br><br>
        <label for="operation">Select operation:</label><br>
        <select id="operation" name="operation" required>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
        </select><br><br>
        <label for="real_part2">Real Part (Second Number):</label><br>
        <input type="number" id="real_part2" name="real_part2" value="0" required><br><br>
        <label for="imaginary_part2">Imaginary Part (Second Number):</label><br>
        <input type="number" id="imaginary_part2" name="imaginary_part2" value="0" required><br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

