The solution involves checking if the index exists before accessing the array element. This can be done using `isset()` or `array_key_exists()`.  Another approach is to use the `??` null coalescing operator to provide a default value if the key does not exist.

```php
<?php
$myArray = array('a', 'b', 'c');
$index = isset($_GET['index']) ? $_GET['index'] : 0; // Use 0 as default if index is not set

//Using isset
if (isset($myArray[$index])) {
  echo $myArray[$index];
} else {
  echo "Index does not exist";
}

// Using array_key_exists
if (array_key_exists($index, $myArray)) {
  echo $myArray[$index];
} else {
  echo "Index does not exist";
}

//Using null coalescing operator
echo $myArray[$index] ?? 'Index not found';
?>
```