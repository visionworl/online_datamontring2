<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrationModel extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'id';
}
