<?php
namespace App\Services;

use App\Repositories\TransaksiRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class TransaksiServices
{
    protected $transaksiRepository;

    public function __construct(TransaksiRepository $transaksiRepository)
    {
        $this->transaksiRepository = $transaksiRepository;
    }
    public function saveTransaksi($data)
    {
        $validator=Validator::make($data,[
           'nama'=>'required',
           'item' => 'required|array',
           'item.*.id' => 'required|string',
           'item.*.jumlah' => 'required|int',
        ]);


        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }
        
        $result = $this->transaksiRepository->addTransaksi($data);

        return $result;
    }
}