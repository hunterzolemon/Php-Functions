<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

function sum() {
    
    $args = func_get_args();
    
    $sum = 0;
    foreach ($args as $n) {
        $sum += $n;
    }
    
    return $sum;
}

echo sum(1, 2, 3) . "\n";
echo sum(1, 2, 3, 4) . "\n";
echo sum(1, 2, 3, 4, 5) . "\n";

?>
</body>
</html>
