<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    use HasFactory;

    protected $table = 'tbl_page';

    protected $fillable = [
        'seo_title', 'seo_description', 'seo_keywords', 
        'area', 'city', 'og_title', 'og_image', 'og_description', 
        'first_title', 'first_description', 'short_tag', 'banner_image', 
        'show_sub_category_service', 'show_service_location', 
        'show_price_information', 'show_testimonial', 'show_faq', 
        'first_content_title', 'first_content_description', 
        'content_short_tag', 'side_image', 'slug', 'slug_name', 
        'location_id', 'service_id', 'image', 'status', 
        'description'
    ];

    // Relationships
    public function location()
    {
        return $this->belongsTo(location::class, 'location_id');
    }

    public function service()
    {
        return $this->belongsTo(service::class, 'service_id');
    }
}
