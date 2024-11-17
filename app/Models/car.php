<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;

    // Table associated with the model
    protected $table = 'tbl_car';

    // The attributes that are mass assignable
    protected $fillable = [
        'service_id',
        'vehicle_type',
        'name',
        'price',
        'item_ratio',
        'price_ratio',
        'slug',
        'image',
        'icon',
        'description',
        'short_description',
        'make',
        'model',
        'year',
        'vin',
        'color',
        'engine_type',
        'aircooling',
        'passanger',
        'transmission',
        'fuel_type',
    ];

    // Define the relationship with the Service model
    public function service()
    {
        return $this->belongsTo(service::class, 'service_id');
    }
}
