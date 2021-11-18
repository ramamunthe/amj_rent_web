<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'whatsapp',
        'facebook',
        'instagram',
        'twitter',
        'email',
        'youtube',
        'tiktok',
        'deskripsi',
        'image'
    ];
}
