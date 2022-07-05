<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        // function isJson($data) {
        //     json_decode($data);
        //     return json_last_error() === JSON_ERROR_NONE;
        //  }
         
        // dd(isJson($data));
        
        
        try {
            $result = ['status' => 200];
            $result['data'] = $this->instructionServices->saveInstruction($data);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        // dd($result);

        return response()->json($result, $result['status']);        
    }
}
