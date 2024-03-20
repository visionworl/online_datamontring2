<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sendEmailModel extends Model
{
    use HasFactory;
    protected $table = 'send_email';
    protected $primaryKey = 'id';
}
