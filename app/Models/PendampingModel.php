<?php

namespace App\Models;

use CodeIgniter\Model;

class PendampingModel extends Model
{
    protected $table = 'pendamping';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_pendamping'];
    protected $primaryKey = 'id_pendamping';
}
