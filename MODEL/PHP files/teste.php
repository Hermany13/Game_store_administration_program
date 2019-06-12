<?php
echo "asdas:<br>".$_POST['produtos_enviar'];

echo "<br>";

echo "".count(explode(";",$_POST['produtos_enviar']))-1 . "<br><br>";

for ($i = 0; $i <= count(explode(";",$_POST['produtos_enviar']))-1; $i++)
{
    echo explode(";",$_POST['produtos_enviar'])[$i]."<br>";
}


$doc = new DOMDocument();

$doc->loadHTMLFile("../../VIEW/templateNotafiscal.html");



$doc->data="batata";

echo $doc->saveHTML();

?>