<?php
//中文
class Cat3
{
    protected $name;//屬性
    protected $position;

    public function __construct($name)//方法，建構子
    {
        $this->name = $name;
        $this->position = ['x'=>0, 'y'=>0];
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function moveTo($x, $y)//有沒有人改寫了？！
    {
        $this->position['x'] = $x;
        $this->position['y'] = $y;

        return $this->position;
    }

    public function move($x, $y)//有沒有人改寫了？！
    {
        $this->position['x'] += $x;
        $this->position['y'] += $y;

        return $this->position;
    }

    public function resetPosition()
    {
        $this->innerFunction();
        $this->moveTo(0,0);

        return $this->position;
    }

    protected function innerFunction()
    {
        echo "innerFunction";
    }
}


$pet = new Cat("Kitty");

echo $pet->getName();
echo "<br>";

$pet->setName("Hello Kitty");
echo $pet->getName();
echo "<br>";

$movePosition = $pet->moveTo(3,5);
echo "(".$movePosition['x'].", ".$movePosition['y'].")";
echo "<br>";

$movePosition = $pet->resetPosition();
echo "(".$movePosition['x'].", ".$movePosition['y'].")";

$movePosition = $pet->move(1,1);
echo "(".$movePosition['x'].", ".$movePosition['y'].")";
echo "<br>";
