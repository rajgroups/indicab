<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    use HasFactory;
    
    // Init Table Name
    protected $table = 'tbl_settings';

    // Declare the web Setting Fillable Data
    protected $fillable = [
        'meta_author',
        'meta_copyright',
        'meta_reply_to',
        'meta_expires',
        'meta_theme_color',
        'meta_handheld_friendly',
        'meta_apple_web_app_capable',
        'meta_apple_status_bar_style',
        'meta_googlebot',
        'meta_allow_search',
        'meta_revisit_after',
        'meta_distribution',
        'meta_coverage',
        'meta_robots',
    ];
}
