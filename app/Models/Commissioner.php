<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commissioner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'email', 'photo', 'bio', 'is_chairman', 'is_former', 'sort_order'];

    protected $casts = [
        'is_chairman' => 'boolean',
        'is_former' => 'boolean',
    ];

    public function getPhotoUrlAttribute()
    {
        return $this->photo ? asset('images/commissioners/' . $this->photo) : asset('images/commissioners/default.jpg');
    }

    public function scopeActive($query)
    {
        return $query->where('is_former', false)->orderBy('sort_order');
    }

    public function scopeFormer($query)
    {
        return $query->where('is_former', true)->orderBy('sort_order');
    }
}
