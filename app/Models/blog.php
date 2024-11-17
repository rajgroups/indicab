<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $table = 'tbl_blog'; // Define the table name
    
    protected $fillable = [
        'service_id',
        'slug',
        'title',
        'description',
        'short_desc',
        'image',
        'status',
    ];

    /**
     * Define the relationship with the Service model.
     * A blog belongs to one service.
     */
    public function service()
    {
        return $this->belongsTo(service::class, 'service_id');
    }
}
