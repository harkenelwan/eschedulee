<?php

namespace App\Controllers;

use App\Models\PendampingModel;


class Pendamping extends BaseController
{

    protected $pendampingModel;

    public function __construct()
    {
        $this->pendampingModel = new PendampingModel();
    }

    public function index()
    {
        $pendamping = $this->pendampingModel->findAll();
        $data = [
            'title' => 'Tambah Pendamping',
            'pendamping' => $pendamping,
            'list' => 'Daftar Pendamping'

        ];
        return view('manage/man_pendamping', $data);
    }
}
