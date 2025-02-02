```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number; // This line is prone to error if $number is not a number
  }
  return $sum;
}

$numbers = [1, 2, '3a', 4, 5];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Output might be unexpected due to type juggling
```