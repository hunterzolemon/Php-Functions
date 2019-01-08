<?php
$a = array('<foo>',"'bar'",'"baz"','&blong&', "\xc3\xa9");

echo "Normal: ",  json_encode($a), "\n";echo "<br>";
echo "Tags: ",    json_encode($a, JSON_HEX_TAG), "\n";echo "<br>";
echo "Apos: ",    json_encode($a, JSON_HEX_APOS), "\n";echo "<br>";
echo "Quot: ",    json_encode($a, JSON_HEX_QUOT), "\n"; echo "<br>";
echo "Amp: ",     json_encode($a, JSON_HEX_AMP), "\n"; echo "<br>";
echo "Unicode: ", json_encode($a, JSON_UNESCAPED_UNICODE), "\n";   echo "<br>";
echo "All: ",     json_encode($a, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE), "\n\n";
?>
<?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo json_encode($arr);
?>
