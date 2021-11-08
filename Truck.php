<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $loading;

    public function __construct(string $color, int $nbSeats, string $energy, string $storageCapacity, string $loading)
    {
        parent:: __construct($color,$nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
        $this->loading = $loading;
    }

    public function full() {
        if ($this->loading < $this->storageCapacity){
            return "In filling";
        } else {
            return "Full";
        }
    }

    public function getStorageCapacity():int {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoading():int {
        return $this->loading;
    }

    public function setLoading(int $loading): void {
         $this->loading = $loading;
    }
}