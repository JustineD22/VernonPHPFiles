<?php
spl_autoload_register(function ($className) {
    include './classes' .$className .'.php';
});

$fichier = file('./files/corbeau.txt');

$fable = "<blockquote>";

for ($i = 0 ; $i < count($fichier) ; $i++) {
    $fable .=$fichier[$i];
    $fable .= "<br/>";
}

$fable .= "</blockquote>";

echo $fable;

echo "<hr>";

$filename = "./files/corbeau.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

var_dump($contents);

$test = new File("./files/corbeau.txt", "r");
var_dump($test->lecture());