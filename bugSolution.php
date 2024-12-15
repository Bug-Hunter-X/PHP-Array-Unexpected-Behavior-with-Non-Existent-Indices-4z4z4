```php
function incrementArrayValue(array &$arr, int $index, int $increment): void {
    if (array_key_exists($index, $arr)) {
        $arr[$index] += $increment; 
    } else {
        //Handle the case where the index does not exist. 
        //Consider throwing an exception or returning an error code. 
        trigger_error("Index does not exist", E_USER_WARNING);
    }
}

$myArray = [];
incrementArrayValue($myArray, 2, 5); // trying to access a non-existent index
echo $myArray[2]; // Outputs nothing and throws a warning

incrementArrayValue($myArray, 0, 10);
echo $myArray[0]; // Outputs 10

incrementArrayValue($myArray, 2, 2);
echo $myArray[2]; // Outputs nothing and throws a warning

incrementArrayValue($myArray, 2, -10); //Decrementing the array
echo $myArray[2]; // Outputs nothing and throws a warning
```