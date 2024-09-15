<?php


abstract class Animal {
    
    abstract public function makeSound();
}


class Dog extends Animal {
    public function makeSound() {
        return "Bark!";
    }
}


class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}


class Cow extends Animal {
    public function makeSound() {
        return "Moo!";
    }
}


function animalSound(Animal $animal) {
    echo $animal->makeSound() . "\n";
}


$dog = new Dog();
$cat = new Cat();
$cow = new Cow();


animalSound($dog);  // Output: Bark!
animalSound($cat);  // Output: Meow!
animalSound($cow);  // Output: Moo!

?>
