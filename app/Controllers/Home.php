<?php

namespace App\Controllers;

use App\Models\JadwalModel;


class Home extends BaseController
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
			'title' => 'E-SCHEDULE | PEMERINTAH KOTA TOMOHON',
			'jadwal' => $this->jadwalModel->get_jadwal(),
			'list' => 'Eschedule'
		];
		return view('jadwalview', $data);
	}
}
