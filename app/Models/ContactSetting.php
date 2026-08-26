<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    use HasFactory;

    protected $table = 'contact_settings';

    protected $fillable = ['phone', 'phone2', 'toll_free', 'email', 'address', 'pobox', 'office_hours', 'facebook_url'];

    public static function instance(): static
    {
        return static::firstOrCreate(['id' => 1]);
    }
}
