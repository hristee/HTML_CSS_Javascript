<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
</head>
<body>
    <?php
    
    $numbers = array(2, 4, 6, 8, 10);
    echo "The first element of the array is: " . $numbers[0] . "<br>";

    $lastElementIndex = count($numbers) - 1;
    echo "The last element of the array is: " . $numbers[$lastElementIndex] . "<br>";

    $numbers[] = 12;
    echo "Added 12 to the end of the array. The updated array is: " . implode(", ", $numbers) . "<br>";

    $sum = array_sum($numbers);
    echo "The sum of all elements in the array is: " . $sum . "<br>";
    ?>
</body>
</html>
