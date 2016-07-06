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
    public function __construct()
    {
        parent::__construct("貓");//呼叫父類別時，使用 parent::   用來設定物種名稱，一次性，不會改變
    }
}

$petCat = new Cat();//產生貓別，初始化時設定物種名稱
echo $petCat->getAnimalType();

echo "<br>END<br>";
