<?php
// Kế thừa
class Animal {
    public function sound() {
        return "Animal sound";
    }
}

class Dog extends Animal {
    public function sound() {
        return "Woof!";
    }
}