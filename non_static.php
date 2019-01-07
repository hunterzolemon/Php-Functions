<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

function nonstatic() {

    $value = 0;
    $value += 1;

    return $value;
}

nonstatic();
nonstatic();
nonstatic();
nonstatic();

echo nonstatic(), "\n";

?>
</body>
</html>
