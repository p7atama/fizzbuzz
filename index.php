<!DOCTYPE html>
<html>
<head>
    <title>FizzBuzz Game</title>
</head>
<body>
    <h1>FizzBuzz Game</h1>

    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the input number
        $number = $_POST['number'];

        // Ensure the input is a positive integer
        if (!is_numeric($number) || $number <= 0 || floor($number) != $number) {
            echo '<p>Please enter a valid positive integer.</p>';
        } else {
            // Include the fizzbuzz.php file
            require 'fizzbuzz.php';

            // Call the fizzBuzz function
            $result = fizzBuzz($number);

            // Display the FizzBuzz sequence
            echo '<p>';
            foreach ($result as $value) {
                echo $value . '<br>';
            }
            echo '</p>';
        }
    }
    ?>
</body>
</html>
