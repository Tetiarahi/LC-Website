<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'file_path', 'category', 'sort_order'];

    public function getFileUrlAttribute()
    {
        return asset('documents/' . $this->file_path);
    }
}
