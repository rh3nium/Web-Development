<!-- Sort array in ascending order without built-in functions -->

<?php
$arr = [5, 3, 8, 1, 2];

for ($i = 0; $i < count($arr) - 1; $i++) {
    if ($arr[$i] > $arr[$i + 1]) {
        // Move smaller value to the start
        $smaller = $arr[$i + 1];

        // Remove value from its current position
        unset($arr[$i + 1]);
        $arr = array_values($arr); // Reindex after unset

        // Add it to the start
        array_unshift($arr, $smaller);
    }
}

// Print the final array
echo "Final array: ";
print_r($arr);
?>
