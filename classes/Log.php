<?php
class Log {

    public static $path = "./logs/erreur.txt";

    public static function write($error) {
        file_put_contents('./logs/erreur.txt' , $error);
        
        $fichier = fopen(self::$path, 'c+b');
        fwrite($fichier, "\n$error");
        fclose($fichier);
    }
}