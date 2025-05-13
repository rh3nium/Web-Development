<!-- var_dump() -->

<?php
class MyClass{
    public $var1 = "Public";
    private $var2 = "Private";
    protected $var3 = "Protected";
}
$obj = new MyClass();
var_dump($obj);

/* Output:
object(MyClass)#1 (3) {
  ["var1"]=>
  string(6) "Public"
  ["var2":"MyClass":private]=>
  string(7) "Private"
  ["var3":protected]=>
  string(9) "Protected"
}
*/
?>