<html>

<body>

<?php

header("Content-type: text/html");

$file = fopen(""C:\Users\sande\Documents\sandesh.txt.txt"","r") or die("Error");

?>

<table border="2px" cellpadding="2px" cellspacing="4px">

<tr>

<th>SN</th>

<th>Name</th>

<th>Address</th>

</tr>

<?php

while(($row = fgets($file)) != false) {

$col = explode(',',$row);

foreach($col as $data) {

echo "<td>". trim($data)."</td>";

}

}

?>

</table>

</body>

</html>//