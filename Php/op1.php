<?php

class MyDog
{
    public $name;
    public $color;

    public function DogInfo()
    {

        echo "my dog name is $this->name and color is $this->color";
    }

}

$d        = new MyDog();
$d->name  = "Tom";
$d->color = "brown";

$d->DogInfo();
