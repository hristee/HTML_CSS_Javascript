<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post">
        Enter Number 1: <input type="text" name="num1"><br><br>
        Enter Number 2: <input type="text" name="num2"><br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if (is_numeric($num1) && is_numeric($num2)) {
            // Calculate and display the results
            $sum = $num1 + $num2;
            $difference = $num1 - $num2;
            $product = $num1 * $num2;
            
            if ($num2 != 0) {
                $quotient = $num1 / $num2;
            } else {
                $quotient = "Undefined (division by zero)";
            }

            echo "Sum: $sum<br>";
            echo "Difference: $difference<br>";
            echo "Product: $product<br>";
            echo "Quotient: $quotient<br>";
        } else {
            echo "Please enter valid numeric values for both numbers.";
        }
    }
    ?>
</body>
</html>
