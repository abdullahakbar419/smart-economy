<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classification extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'classifications';

    protected $primaryKey = 'id';

    protected $guarded = [
        'id'
    ];

    public function file()
    {
        return $this->belongsTo(FileUpload::class, 'file_id');
    }

    public function village()
    {
        return $this->hasOne(Village::class);
    }

    public function pakars()
    {
        return $this->hasMany(Pakar::class);
    }
}
