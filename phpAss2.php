<!DOCTYPE html>
<html>
<head>
    <title>Sum of Even Numbers</title>
</head>
<body>
    <h1>Sum of Even Numbers</h1>

    <?php
    function sumOfEvenNumbers($arr) {
        $sum = 0;
        foreach ($arr as $number) {
            if ($number % 2 === 0) {
                $sum += $number;
            }
        }
        return $sum;
    }

   
    $numbers = [1, 2, 3, 4, 5, 6,7,8,9,10];
    $evenSum = sumOfEvenNumbers($numbers);
    ?>

    <p>
        The sum of even numbers in the array is:
         <?php 
        echo $evenSum; 
        ?></p>
</body>
</html>
