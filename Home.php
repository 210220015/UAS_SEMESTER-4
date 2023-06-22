<?php

namespace App\Controllers;
use App\Models\MatkulModel;

class Home extends BaseController
{
    public function __Construct() {
        $this->matkul = new MatkulModel();
    }
    public function index()
    {
        $data = [
            'dataMatkulDenganJumlah' => $this->matkul->getDataMatkulJumlahPL(),
            'dataMakul' => $this->matkul->getDataMatkul(),
            'dataMakulJumlahHasil' => $this->matkul->getDataMatkulKelulusan(),
        ];
        // dd($data['dataMakulJumlahHasil']);
        return view('index', $data); 
    }
}
