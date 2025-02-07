<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'accounts'; // Tabel yang digunakan

    protected $fillable = ['name', 'email', 'password', 'role']; // Gunakan 'role', bukan 'role_id' jika string

    protected $hidden = ['password'];

    protected $casts = [
        'password' => 'hashed', // Laravel 10+ otomatis mengenkripsi password
    ];

    /**
     * Cek apakah akun adalah admin.
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    /**
     * Cek apakah akun adalah worker.
     */
    public function isWorker()
    {
        return $this->role === 'worker';
    }

    /**
     * Cek apakah akun adalah user biasa.
     */
    public function isUser()
    {
        return $this->role === 'user';
    }
}
