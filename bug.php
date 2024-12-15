```php
function incrementArrayValue(array &$arr, int $index, int $increment): void {
    if (!isset($arr[$index])) {
        $arr[$index] = 0; // Initialize if the index doesn't exist
    }
    $arr[$index] += $increment;
}

$myArray = [];
incrementArrayValue($myArray, 2, 5); // trying to access a non-existent index
echo $myArray[2]; // Outputs 5

incrementArrayValue($myArray, 0, 10);
echo $myArray[0]; // Outputs 10

incrementArrayValue($myArray, 2, 2);
echo $myArray[2]; // Outputs 7

incrementArrayValue($myArray, 2, -10); //Decrementing the array
echo $myArray[2]; // Outputs -3
```