<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $table = 'tbl_service'; // Specify the table name if different

    protected $fillable = [
       'name',
       'slug',
       'status'
    ];

    // Relation to Pages
    public function pages()
    {
        return $this->hasMany(page::class, 'service_id');
    }

    // Relation to Pages
    public function subservice()
    {
        return $this->hasMany(subservice::class, 'service_id');
    }

    public function prices()
    {
        return $this->hasMany(price::class, 'service_id');
    }

    // Define the inverse relationship with the Car model
    public function cars()
    {
        return $this->hasMany(car::class, 'service_id');
    }

    /**
     * Define the relationship with the Blog model.
     * A service has many blogs.
     */
    public function blogs()
    {
        return $this->hasMany(blog::class, 'service_id');
    }

    
}
