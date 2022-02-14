<?php

class File {
    private $file;
    private $method;
    private $handle;

    function __construct($file, $method)
    {
        $this->handle = fopen($this->file, $this->method);
    }

    function __destruct()
    {
        fclose($this->handle);
    }
}