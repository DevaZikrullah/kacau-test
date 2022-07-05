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
        $client = new Client(
            "mongodb://mongo-1:27017", ["username" => "root", "password" => "root"]);

        $collection = $client->laravel_sail->motors;
        $cursor = $collection->find(['_id' => new ObjectId( '62c2b2720335d9ef4a08a369')])->toArray();
        dd($cursor);


//        return $insertOneResult;
    }
}
