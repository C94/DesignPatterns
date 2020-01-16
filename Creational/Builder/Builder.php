<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Builder;

interface Builder
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}