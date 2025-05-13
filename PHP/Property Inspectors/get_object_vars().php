<!-- get_object_vars() -->

<?php
class MyClass{
    public $var1 = "Public";
    private $var2 = "Private";
    protected $var3 = "Protected";
}
$obj = new MyClass();
print_r(value: get_object_vars($obj));

/* Output:
Array
(
    [var1] => Public
)
*/
?>