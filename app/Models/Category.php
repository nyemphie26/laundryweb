<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function variants()
    {
        return $this->hasManyThrough(Variant::class, Service::class);
    }
}
