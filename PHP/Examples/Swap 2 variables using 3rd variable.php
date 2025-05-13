<!-- Swap 2 variables using 3rd variable -->

<?php 
$num1 = 90; 
$num2 = 44; 
echo("Number 1: " . $num1); 
echo "\r\n"; 
echo("Number 2: " . $num2); 
echo "\r\n"; echo "\r\n"; 
$temp = $num1; 
$num1 = $num2; 
$num2 = $temp; 
echo("Numbers after swapping: ");
echo "\r\n"; 
echo("Number 1 after swap: " . $num1); 
echo "\r\n"; 
echo("Number 2 after swap: " . $num2);

/* Output:
Number 1: 90
Number 2: 44

Numbers after swapping:
Number 1 after swap: 44
Number 2 after swap: 90
*/
?>  