<?php

$fichier = file('./files/corbeau.txt');

$fable = "<blockquote>";

for ($i = 0 ; $i < count($fichier) ; $i++) {
    $fable .=$fichier[$i];
    $fable .= "<br/>";
}

$fable .= "</blockquote>";

echo $fable;