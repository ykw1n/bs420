<?php

declare(strict_types=1);

namespace App\Task1;

class Track
{
    public array $ontrack = [];
    public float $lapLength;
    public int $lapsNumber;

    /**
     * Track constructor.
     * @param float $lapLength
     * @param int $lapsNumber
     */
    public function __construct(float $lapLength, int $lapsNumber)
    {
        $this->lapLength = $lapLength;
        $this->lapsNumber = $lapsNumber;
    }

    public function getLapLength(): float
    {
        return $this->lapLength;
    }

    public function getLapsNumber(): int
    {
        return $this->lapsNumber;
    }

    public function add(Car $car): void
    {
        array_push($this->ontrack, $car);
    }

    public function all(): array
    {
        return $this->ontrack;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        $carTime = [];
        $allCar = $this->all();
        $pathLength = $this->getLapLength() * $this->getLapsNumber();

        foreach ($allCar as $carItem) {
            $pathTime = round($pathLength / $carItem->speed, 2) * 60;
            $fullPathOnOnetank = floor(($carItem->fuelTankVolume * 100) / $carItem->fuelConsumption);
            $pitstopCount = floor($pathLength / $fullPathOnOnetank);

            if ($pitstopCount >= 1) {
                $pathTime += $carItem->pitStopTime * $pitstopCount;
            }
            $carTime[$carItem->id] = $pathTime;
        }

        $minVal = null;

        foreach ($carTime as $keyTime => $valTime) {
            if ($valTime < $minVal || $minVal === null) {
                $minVal = $valTime;
                $minKey = $keyTime;
            }
        }
        foreach ($allCar as $key => $value) {
            if ($value->id == $minKey) {
                return $allCar[$key];
            }
        }

    }
}