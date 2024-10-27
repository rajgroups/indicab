<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subservice extends Model
{
    use HasFactory;

    // initialize Table name
    protected $table = 'tbl_sub_service';
    
    // initialize fillable  fields
    protected $fillable = [
        'name',
        'image',
        'slug',
        'icon',
        'service_id',
    ];

    // Relation to Pages
    public function service()
    {
        return $this->belongsTo(service::class, 'service_id');
    }
}
