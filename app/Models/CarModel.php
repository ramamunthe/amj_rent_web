<?php

namespace App\Models;

use CodeIgniter\Model;

class CarModel extends Model
{
    protected $table      = 'cars';
    protected $primaryKey = 'car_id';

    protected $allowedFields = [
        'category_id',
        'car_title',
        'car_body',
        'image'
    ];
}
