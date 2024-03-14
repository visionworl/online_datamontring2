<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivicedataModel extends Model
{
    use HasFactory;
    protected $table = 'divice_data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pump_title',
    ];

    public function online()
    {
        return $this->belongsTo(OnlineDataModel::class,'device_id' );
    }

}
