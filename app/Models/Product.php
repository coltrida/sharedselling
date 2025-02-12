<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function scopeAuthorizated(Builder $query)
    {
        $query->where('auth', '1');
    }

    public function scopeNotAuthorizated(Builder $query)
    {
        $query->where('auth', '0');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
