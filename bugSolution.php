```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately, e.g., skip them, throw an exception, or use a default value
      echo "Warning: Non-numeric value encountered: " . $number . '\n';
    }
  }
  return $sum;
}

$numbers = [1, 2, '3a', 4, 5];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Output will be the correct sum, with a warning for '3a'
```