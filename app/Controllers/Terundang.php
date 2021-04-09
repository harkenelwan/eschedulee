<?php

namespace App\Controllers;

// use App\Models\PendampingModel;
use App\Models\TerundangModel;

class Terundang extends BaseController
{

    protected $terundangModel;

    public function __construct()
    {
        $this->terundangModel = new TerundangModel();
    }

    public function index()
    {
        $terundang = $this->terundangModel->findAll();
        $data = [
            'title' => 'Tambah Terundang',
            'terundang' => $terundang,
            'list' => 'Daftar Terundang'

        ];
        return view('manage/man_terundang', $data);
    }
}
