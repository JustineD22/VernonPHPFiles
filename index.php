<?php
spl_autoload_register(function ($className) {
    include './classes/' .$className .'.php';
});

$fichier = fopen('./files/ecriture.txt', 'c+b');

fwrite($fichier, "ligne de  comm");

fclose($fichier);


 //Ajout Ecriture

// file_put_contents('./files/toto.txt' , 'Ecriture dans fichier');

// $contenu = file_get_contents('./files/toto.txt');
// $contenu .= "\nLa suite du fichier";
// file_put_contents('./files/toto.txt', $contenu, FILE_APPEND);

// Log::write('erreur');


//Lecture

// $fichier = file('./files/corbeau.txt');

// $fable = "<blockquote>";

// for ($i = 0 ; $i < count($fichier) ; $i++) {
//     $fable .=$fichier[$i];
//     $fable .= "<br/>";
// }

// $fable .= "</blockquote>";

// echo $fable;

// echo "<hr>";

// $filename = "./files/corbeau.txt";
// $handle = fopen($filename, "r");
// $contents = fread($handle, filesize($filename));
// $handle = fopen($filename, "rb");

// while (!feof($handle)) {
//     $ligne = fgets($handle);
//     echo "Ligne : " . $ligne . " - Valeur point : " . ftell($handle) . "<br/>";
// }

// echo "<hr>";
// fclose($handle);



// var_dump($contents);

// // $test = new File("./files/corbeau.txt", "r");
// // var_dump($test->lecture());