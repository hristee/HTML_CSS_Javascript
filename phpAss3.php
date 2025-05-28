<!DOCTYPE html>
<html>
<body>

<?php
function countVowels($str) {
    // Convert the string to lowercase 
    $str = strtolower($str);
    
    
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    $count = 0;
    
    
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    
    return $count;
}


$inputString = "Hello, World!";
$result = countVowels($inputString);
echo "Number of vowels: " . $result; 
?>


</body>
</html>
