<?php

namespace App\Repositories;

use App\Models\Mobil;
use App\Models\Motor;


class KendaraanRepository
{
    public function getMobil()
    {
        return Mobil::all();
    }

    public function getMotor()
    {
        return Motor::all();
    }

}
