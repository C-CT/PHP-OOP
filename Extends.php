<?php

class Animal
{
    private $animalType;//用 private 存放物種名稱，只在一開始時使用，後續不再改變
    protected $position;

    public function __construct($animalTypeFromOut)//從外部傳入物種名稱
    {
        $this->animalType = $animalTypeFromOut;
        $this->position = ['x'=>0, 'y'=>0];
    }

    public function getAnimalType()//取得物種名稱
    {
        return $this->animalType;
    }

    public function move($x, $y)
    {
        $this->position['x'] += $x;
        $this->position['y'] += $y;

        return $this->position;
    }

    public function getFood($foodName)//從外部得到食物
    {
        echo "得到食物".$foodName."～<br>";
        $this->eat($foodName);//暫時在這觸發 eat 的功能
    }

    protected function eat($foodName)//子類別自己可以控制要不要吃
    {
        echo "正在吃".$foodName."～<br>";
        $this->digest($foodName);//有吃下去，一定要消化，子類別不能控制
    }

    private function digest($foodName)//消化功能
    {
        echo "正在消化".$foodName."～<br>";
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

class Dog extends Animal //跟貓類別有很多重覆，也許還可以再抽象出一層？
{
    private $petName;

    public function __construct($name)
    {
        parent::__construct("狗");//呼叫父類別時，使用 parent::   用來設定物種名稱，一次性，不會改變
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

    public function move($x, $y)
    {
        $this->position['x'] += $x*2;
        $this->position['y'] += $y*2;

        return $this->position;
    }
}

$petCat = new Cat("Kitty");//產生貓別，初始化時設定物種名稱。傳入竉物名稱。
echo $petCat->getAnimalType();//貓類別繼承動物類別，因為是 public 所以可以直接使用
echo "<br>";
echo $petCat->getPetName();
echo "<br>";

$positionCat = $petCat->move(1,1);//貓類別繼承動物類別，因為是 public 所以可以直接使用
echo $petCat->getPetName()."的位置:(".$positionCat['x'].",".$positionCat['y'];
echo "<br>";

$petCat->getFood("小魚");


$petDog = new Dog("Wangwang");//產生貓別，初始化時設定物種名稱。傳入竉物名稱。
echo $petDog->getAnimalType();//貓類別繼承動物類別，因為是 public 所以可以直接使用
echo "<br>";
echo $petDog->getPetName();
echo "<br>";

$positionDog = $petDog->move(1,1);//貓類別繼承動物類別，因為是 public 所以可以直接使用
echo $petDog->getPetName()."的位置:(".$positionDog['x'].",".$positionDog['y'];
echo "<br>";

$petCat->getFood("骨頭");


echo "<br>END<br>";
