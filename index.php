<?php
    class Initial{
        public $n1;
        public $n2;
        public function helloWorld(){
            echo("Hello World");
        }
    }

    $numero = new Initial();

    $numero->n1 = 10;
    $numero->n2 = 57;

    $texto = new Initial();

    echo($numero->n1 * $numero->n2."<br><br>");

    $texto->helloWorld();
?>    