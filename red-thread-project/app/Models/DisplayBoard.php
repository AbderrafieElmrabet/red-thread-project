<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisplayBoard extends Model
{
    use HasFactory;

    // Define the table name if it's different from the default (plural form of the model)
    protected $table = 'display_boards';

    // Define the fillable attributes (the fields you can mass-assign)
    protected $fillable = [
        'title',
        'image',
        'description',
        'user_id',
    ];

    // Define the relationship with the User (each display board belongs to one user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}