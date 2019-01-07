<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

function factorial($n) {

    if ($n==0) {
    
        return 1;
    } else {
    
        return $n * factorial($n - 1);
    }
}

echo factorial(4), "\n";
echo factorial(10), "\n";

?>
</body>
</html>
