<?php

<?php

class MyDog
{
    public $name;
    public $color;

    public function __construct($dogName, $dogColor)
    {

        $this->name  = $dogName;
        $this->color = $dogColor;

    }

    public function DogInfo()
    {

        echo "my dog name is $this->name and color is $this->color \n";
    }

}

$d = new MyDog('Tom', 'brown');

// $d1        = new MyDog();

$d->DogInfo();
// $d1->DogInfo();
