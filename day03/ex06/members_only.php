<?php
$login = "zaz";
$pass = "Ilovemylittleponey";
if ($_SERVER['PHP_AUTH_USER'] === $login && $_SERVER['PHP_AUTH_PW'] === $pass)
{

echo "<html><body>"."\n";
echo "Hello Zaz<br />\n";

echo "<img src='data:image/png;base64, ";

echo base64_encode(file_get_contents('../img/42.png')) . "'>";

}
else
{
	echo "<html><body>That area is accessible for members only</body></html>";
}
//print_r($_SERVER);

?>