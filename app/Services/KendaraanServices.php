<?php
namespace App\Services;

use App\Repositories\KendaraanRepository;

class KendaraanServices
{
    protected object $kendaraanRepository;

    public function __construct(KendaraanRepository $kendaraanRepository)
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function getKendaraan()
    {
        return [
            $this->kendaraanRepository->getMobil(),
            $this->kendaraanRepository->getMotor()
        ];
    }
}