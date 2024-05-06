<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discrimant</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; text-align: center;">

<div style="width: 80%; margin: 0 auto; padding-top: 50px;">
    <?php
    if(isset($_GET['getTotal'])) {
        // Check if all input fields are provided
        if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
            // Check if input values are numeric
            if(is_numeric($_GET['a']) && is_numeric($_GET['b']) && is_numeric($_GET['c'])) {
                $a = $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];

                $total = $b*$b - 4*$a*$c;

                echo "<div style='margin-top: 20px; padding: 10px; background-color: #f0f0f0; border-radius: 5px; font-family: Arial, sans-serif;'>";
                echo "<h1> Discriminant of a Quadratic Equation</h1>";
                echo "<h2> The answer is " . $total . "</h2>";
                echo "</div>";
            } else {
                echo "<div style='margin-top: 20px; padding: 10px; background-color: #ffcccc; border-radius: 5px;'>";
                echo "<h1> Error</h1>";
                echo "<p> Please enter numeric values for A, B, and C.</p>";
                echo "</div>";
            }
        } else {
            echo "<div style='margin-top: 20px; padding: 10px; background-color: #ffcccc; border-radius: 5px;'>";
            echo "<h1> Error</h1>";
            echo "<p> Please provide values for A, B, and C.</p>";
            echo "</div>";
        }
    }
    ?>
</div>
</body>
</html>
