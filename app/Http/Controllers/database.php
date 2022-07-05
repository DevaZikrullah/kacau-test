<?php

namespace App\Http\Controllers;


use MongoDB\Client;

class database extends Controller
{
    public function connect()
    {
        $client = new Client(
            "mongodb://mongo-1:27017", ["username" => "root", "password" => "root"]);

        $collection = $client->laravel_sail->motors;
        $cursor = $collection->find(['_id' => new ObjectId( '62c2b2720335d9ef4a08a369')])->toArray();
        dd($cursor);
    }
}
