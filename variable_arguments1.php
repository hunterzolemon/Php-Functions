<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

function sum(...$nums) {
    
    $sum = 0;
    
    foreach ($nums as $n) {
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
