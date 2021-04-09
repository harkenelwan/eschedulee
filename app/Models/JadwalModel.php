<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwal';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_acara', 'waktu', 'tempat', 'id_terundang', 'id_pendamping'];
    protected $waktu;
    protected $primaryKey = 'id_jadwal';



    public function get_jadwal()
    {

        return $this->db->table('jadwal')
            ->join('pendamping', 'pendamping.id_pendamping = jadwal.id_pendamping')
            ->join('terundang', 'terundang.id_terundang = jadwal.id_terundang')
            ->get()->getResultArray();
    }
}
