<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class ServicePage extends Model
{
    use HasFactory;

    protected $table = 'service_pages';
    protected $fillable = ['page_title', 'short_code', 'image', 'content'];

    public function scopeServiceContent($query)
    {
        return Cache::remember('service_page_content', 5000, function () use ($query) {
            return $query->where('short_code', 'service_page_content')->first();
        });
    }
}
