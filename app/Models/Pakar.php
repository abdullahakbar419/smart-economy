<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pakar extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pakars';

    protected $primaryKey = 'id';

    protected $guarded = [
        'id'
    ];

    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classification_id');
    }
}
