<!-- Print numbers 0-5 using array and get_object_vars() -->

<?php
class MyNums{
    public $num1 = 0;
    public $num2 = 1;
    public $num3 = 2;
    public $num4 = 3;
    public $num5 = 4;
    public $num6 = 5;
    // Create a function
    public function myfunc(){
        echo "Welcome \n";
    }
}
// Create a new object
$obj = new MyNums();
// Call the function
echo $obj ->myfunc();
// Get and print object properties as array
$properties = get_object_vars($obj);
print_r($properties);

/* Output:
Welcome
Array
(
    [num1] => 0
    [num2] => 1
    [num3] => 2
    [num4] => 3
    [num5] => 4
    [num6] => 5
)
*/
?>