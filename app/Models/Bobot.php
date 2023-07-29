<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bobot extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bobots';

    protected $primaryKey = 'id';

    protected $guarded = [
        'id'
    ];
}
