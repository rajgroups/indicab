<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    use HasFactory;
    // Table name
    protected $table = 'tbl_price'; 


    protected $fillable = [
        'name',
        'service_id',
        'price',
        'slug',
        'item_ratio',
        'price_ratio',
        'image',
        'icon',
        'short_description',
        'description',
    ];

    public function service()
    {
        return $this->belongsTo(service::class, 'service_id');
    }

    
}
