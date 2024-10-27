<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $table = 'tbl_location'; // Specify the table name if different

    protected $fillable = [
       'name',
       'description',
       'image',
       'slug',
       'status'
    ];

    // Relation to Pages
    public function pages()
    {
        return $this->hasMany(page::class, 'location_id');
    }
}
