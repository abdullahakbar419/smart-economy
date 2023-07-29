<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembobotan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pembobotans';

    protected $primaryKey = 'id';

    protected $guarded = [
        'id'
    ];
}
