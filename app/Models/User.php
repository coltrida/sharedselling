<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getBalanceformattatoAttribute()
    {
        return '€ '. number_format($this->balance, 2, ',', '.');
    }

    public function getFullnameAttribute()
    {
        return $this->name.' '.$this->surname;
    }

    public function scopeClients(Builder $query)
    {
        $query->where('role', '0');
    }

    public function scopeIsAdmin()
    {
        return $this->role == 1;
    }

    public function myProductsOwner()
    {
        return $this->belongsToMany(Product::class)
            ->wherePivot('owner', 1)
            ->orderByPivot('created_at', 'desc');
    }

    public function myProductsNonOwner()
    {
        return $this->belongsToMany(Product::class)
            ->wherePivot('owner', 0)
            ->orderByPivot('created_at', 'desc');
    }
}
