<?php

declare(strict_types=1);

namespace App\Task3;

use App\Task1\Car;
use App\Task1\Track;

class CarTrackHtmlPresenter
{
    public string $html;

    public function present(Track $track): string
    {
        $winnerObj = $track->run();
        $allFighters = '';
        foreach ($track->all() as $val) {
            $allFighters .= $val->getName();
            $allFighters .=': ';
            $allFighters .= $val->getId();
            $allFighters .=', ';
            $allFighters .= $val->getSpeed();
            $allFighters .=' ';
            $allFighters .= '<br><img src="'.$val->getImage().'">';

            $allFighters .='<br>';

        }
        $this->html = '
            <h2>All Fighters: </h2>'.$allFighters.'
         
            <h3>Race winner <span style="color: crimson;">'.$winnerObj->getName().'</span> </h3>'.
            '
            <ul>
            <li>Id: '.$winnerObj->getId().'</li>
            <li>speed: '.$winnerObj->getSpeed().'</li>
            <li>Pit Stop Time: '.$winnerObj->getPitStopTime().'</li>
            <li>Fuel Consumption: '.$winnerObj->getFuelConsumption().'</li>
            <li>Fuel TankVolume: '.$winnerObj->getFuelTankVolume().'</li>
            
            </ul>'
            ;
        

      return $this->html;
    }
}