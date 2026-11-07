<?php

declare(strict_types=1);

namespace App\Geo;

interface Shape
{
    public function calcArea();
    public function calcPerimeter();
    public function calcVolume();
}
