<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

function swap($a, $b) {

    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "inside swap function:\n";
    echo "\$a is $a \n";
    echo "\$b is $b \n";
}

$a = 4;
$b = 7;

echo "outside swap function:\n";
echo "\$a is $a \n";
echo "\$b is $b \n";

swap($a, $b);

echo "outside swap function:\n";
echo "\$a is $a \n";
echo "\$b is $b \n";

?>
</body>
</html>
