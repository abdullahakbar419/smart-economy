<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlgoritmaC50 extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'algoritma_c50_s';

    protected $primaryKey = 'id';

    protected $guarded = [
        'id'
    ];
}
