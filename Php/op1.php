<?php

class MyDog
{
    public $name;
    public $color;

    public function DogInfo()
    {

        echo "my dog name is $this->name and color is $this->color \n";
    }

}

$d        = new MyDog();
$d->name  = "Tom";
$d->color = "brown";

$d1        = new MyDog();
$d1->name  = "Blow";
$d1->color = "Blue";

$d->DogInfo();
$d1->DogInfo();
