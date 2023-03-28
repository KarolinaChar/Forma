<?php
// 12 UZDUOTIS

class User {
    public $name;
    public $surname;
    public $method;

    public function __construct($name, $surname, $method){
        $this->name = $name;
        $this->surname = $surname;
        $this->method = $method;
    }
}

$user1 = new User('Lionginas', 'Puntukas', 'Labas');
$user2 = new User('Valerijona', 'Puntukiene', 'Labas Vakaras');

var_dump($user1);
var_dump($user2);

