<?php

declare(strict_types=1);

namespace App\Task1;

class Car
{

    public int $id;
    public string $image;
    public string $name;
    public int $speed;
    public int $pitStopTime;
    public float $fuelConsumption;
    public float $fuelTankVolume;

    /**
     * Car constructor.
     * @param int $id
     * @param string $image
     * @param string $name
     * @param int $speed
     * @param int $pitStopTime
     * @param float $fuelConsumption
     * @param float $fuelTankVolume
     */

    public function __construct(
        int $id,
        string $image,
        string $name,
        int $speed,
        int $pitStopTime,
        float $fuelConsumption,
        float $fuelTankVolume
    )
    {
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        $this->speed = $speed;
        $this->pitStopTime = $pitStopTime;
        $this->fuelConsumption = $fuelConsumption;
        $this->fuelTankVolume = $fuelTankVolume;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function getPitStopTime(): int
    {
        return $this->pitStopTime;
    }

    public function getFuelConsumption(): float
    {
        return $this->fuelConsumption;
    }

    public function getFuelTankVolume(): float
    {
        return $this->fuelTankVolume;
    }
}