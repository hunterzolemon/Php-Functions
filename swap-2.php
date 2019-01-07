<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

function swap(&$a, &$b) {

    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "Inside the swap function:\n";
    echo "\$a is $a \n";
    echo "\$b is $b \n";
}

$a = 4;
$b = 7;

echo "Outside the swap function:\n";
echo "\$a is $a \n";
echo "\$b is $b \n";

swap($a, $b);

echo "Outside the swap function:\n";
echo "\$a is $a \n";
echo "\$b is $b \n";

?>
</body>
</html>
