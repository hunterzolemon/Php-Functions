<?php

class foo {
    function name()
    {
        echo "My name is " , get_class($this) , "\n";
    }
}

// create an object
$bar = new foo();

// external call
echo "Its name is ",get_class($bar) , "\n";

// internal call
$bar->name();

?>
//num 2 example//
<?php

class foo {
    function name()
    {
        echo "main " , get_class($this) , "\n";

    }
    function name2()
    {
        echo "main2 " , get_class($this) , "\n";
    }
}


$bar = new foo();
                        echo $bar->name();
                        echo $bar->name2();


?>
