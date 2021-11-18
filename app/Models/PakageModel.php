<?php

namespace App\Models;

use CodeIgniter\Model;

class PakageModel extends Model
{
    protected $table      = 'pakages';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'body',
        'image'
    ];
}
