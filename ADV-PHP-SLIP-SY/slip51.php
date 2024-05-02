<?php
abstract class Shape
{
    protected $x = 0;
    protected $y = 0;
    protected $l = 0;
    protected $b = 0;
    protected $h = 0;

    public abstract function area();
    public abstract function volume();
}

class Rectangle extends Shape
{
    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function area()
    {
        return $this->x * $this->y;
    }

    function volume()
    {
        return $this->l * $this->l;
    }
}

$ob = new Rectangle(3, 4);
echo "Area of rectangle = " . $ob->area();
echo "Area of rectangle = " . $ob->volume(); // This line is incorrect, as Rectangle doesn't have a 'volume' property
?>