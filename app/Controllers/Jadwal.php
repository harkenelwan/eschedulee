<?php

namespace App\Controllers;

use App\Models\JadwalModel;

class Jadwal extends BaseController
{
    protected $jadwalModel;
    protected $pendampingModel;
    protected $terundangModel;

    public function __construct()
    {
        $this->jadwalModel = new JadwalModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Jadwal',
            'jadwal' => $this->jadwalModel->get_jadwal(),
            'list' => 'Daftar Jadwal'
        ];
        return view('manage/man_jadwal', $data);
    }
}
