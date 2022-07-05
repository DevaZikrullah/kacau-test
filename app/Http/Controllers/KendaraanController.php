<?php

namespace App\Http\Controllers;

use App\Services\KendaraanServices;
use Exception;
use Illuminate\Http\Request;
use MongoDB\BSON\ObjectId;
use MongoDB\Client;

class KendaraanController extends Controller
{
    public function getAllKendaraan(KendaraanServices $kendaraanServices)
    {
        $result = ['status' => 200];


        try {
            $result['data'] = $items = $kendaraanServices->getKendaraan();
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);
    }
}
