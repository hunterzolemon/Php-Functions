<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$value = 1;

function simple() {

    global $value;
    $value = 2;
}

echo $value, "\n";
simple();
echo $value, "\n";

?>
</body>
</html>
