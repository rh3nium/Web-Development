<!-- get_class_vars() -->
 
<?php
class MyClass{
    public $var1 = "Public";
    private $var2 = "Private";
    protected $var3 = "Protected";
}
print_r(get_class_vars('MyClass'));

/* Output:
Array
(
    [var1] => Public
)
*/
?>