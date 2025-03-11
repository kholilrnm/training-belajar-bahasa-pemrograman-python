<?php
class Hero {
    public $name;
    public $role;
    public $health;
    public $attack;

    public function __construct($name, $role, $health, $attack) {
        $this->name = $name;
        $this->role = $role;
        $this->health = $health;
        $this->attack = $attack;
    }

    public function displayInfo() {
        return "Hero: $this->name, Role: $this->role, Health: $this->health, Attack: $this->attack";
    }
}

// Membuat objek hero
$hero1 = new Hero("Alucard", "Fighter", 3200, 150);
$hero2 = new Hero("Layla", "Marksman", 2500, 180);

// Menampilkan informasi hero
echo $hero1->displayInfo() . "\n";
echo $hero2->displayInfo() . "\n";

// Menampilkan atribut dalam bentuk array
print_r(get_object_vars($hero1));
?>
