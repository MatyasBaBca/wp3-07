<?php
require_once 'function.php';
define("STRANA_A", 10);
define("STRANA_B", 20);
define("STRANA_C", 10);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
<?php

echo '<br>objem = '.vypocetObjem(STRANA_A, STRANA_B, STRANA_C);
echo '<br>obsah = '.vypocetObsah(STRANA_A, STRANA_B, STRANA_C);
echo '<br>obvod = '.vypocetObvod(STRANA_A, STRANA_B, STRANA_C);

?>
</body>
</html>