<?php

declare(strict_types=1);

namespace App\Geo;

class Circle extends ParentShape implements Shape
{
    public function calcArea()
    {
        $this->format();
    }

    public function calcPerimeter()
    {
        // 
    }

    public function calcVolume()
    {
        // 
    }
}
