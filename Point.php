<?php

class Point
{
    public int $x, $y;

    public function __construct(int $_x, int $_y)
    {
        $this->x = $_x;
        $this->y = $_y;
    }

    public function __toString()
    {
        return "Точка с координатами ($this->x, $this->y)";
    }

    public function __get($name)
    {
        if (!isset($this->name)) {
            echo "(Метод __get)Класс Point работает только в двумерном пространстве";
        }

    }

    public function __set($name, $value)
    {
        if (!isset($this->$name)) {
            echo "(Метод __set)Класс Point работает только в двумерном пространстве";
        }
    }

    public function __call($method, $argument) {
        if ($method == 'setZ') {
            echo "(Метод __call)Класс Point работает только в двумерном пространстве";
        }
    }
}

$first_object = new Point(0, 5);
$second_object = new Point(10, 20);
$third_object = new Point(-25, 99);

echo "$first_object<br>";
echo "$second_object<br>";
echo "$third_object<br>";
echo "<hr>";
$first_object->z ;
echo "<hr>";
$first_object->d = 25;
echo "<hr>";
$first_object->setZ();
echo "<hr>";
$clone_first_object = clone $first_object;
$clone_first_object->x = 22;
echo "$clone_first_object->x<br>";
echo $first_object->x;

