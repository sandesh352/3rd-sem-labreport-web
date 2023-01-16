<?php
$filename = "Q03.txt";
$fp = fopen($filename, "r");
echo "<table border=1>";
while(!feof($fp))
{
$line = fgets($fp);
echo "<tr><td>$line</td></tr>";
}
echo "</table>";
fclose($fp);
?>