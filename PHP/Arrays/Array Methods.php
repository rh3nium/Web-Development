<!-- Array Methods -->

<?php
// Define array
$sweets = ["Lollipop", "Cupcake", "Muffin", "Gumball", "Gumdrop", "Jelly", "Cake pop", "Brownie"]; 
// Print all values in array
print_r($sweets); 
// array_rand() - print random element in array
print_r(array_rand($sweets)); 
print_r("\r\n"); 
// array_reverse() - reverse elements of array
print_r(array_reverse($sweets)); 
print_r("\r\n"); 
// array_pop()  - delete last element in array
print_r(array_pop($sweets)); 
print_r("\r\n"); 
// array_count_values() - count values in array
print_r(array_count_values($sweets)); 
?>