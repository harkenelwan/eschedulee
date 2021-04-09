<?php

namespace App\Models;

use CodeIgniter\Model;

class TerundangModel extends Model
{
    protected $table = 'terundang';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_terundang'];
    protected $primaryKey = 'id_terundang';
}
