<?php

class Animal
{
    private $animalType;//用 private 存放物種名稱，只在一開始時使用，後續不再改變

    public function __construct($animalTypeFromOut)//從外部傳入物種名稱
    {
        $this->animalType = $animalTypeFromOut;
    }

    public function getAnimalType()//取得物種名稱
    {
        return $this->animalType;
    }
}

class Cat extends Animal
{
    private $petName;

    public function __construct($name)
    {
        parent::__construct("貓");//呼叫父類別時，使用 parent::   用來設定物種名稱，一次性，不會改變
        $this->petName = $name;//設定竉物名稱
    }

    public function getPetName()
    {
        return $this->petName;
    }

    public function setPetName($petName)//竉物名稱是可以改變的
    {
        $this->petName = $petName;
    }
}

$petCat = new Cat("Kitty");//產生貓別，初始化時設定物種名稱。傳入竉物名稱。
echo $petCat->getAnimalType();
echo "<br>";
echo $petCat->getPetName();

echo "<br>END<br>";
