<?php


class Fan
{
//private $slow = 1;
//private $medium = 2;
//private $fast = 3;
    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct($speed, $on, $radius, $color)
    {
        $this->speed = $speed;
        $this->on = $on;
        $this->radius = $radius;
        $this->color = $color;
    }

    public function setSpeed()
    {
        $this->speed = 1;
    }

    public function setOn()
    {
        $this->on = false;
    }

    public function setRadius()
    {
        $this->radius = 5;
    }

    public function setColor()
    {
        $this->color = tostring("blue");
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function toString()
    {
        if ($this->on == true) {
            echo "quat bat voi toc do " . $this->speed . "  ban kinh" . $this->radius . "  mau sac" . $this->color;
        } else
            echo "  ban kinh" . $this->radius . "  mau sac" . $this->color;
    }


}

