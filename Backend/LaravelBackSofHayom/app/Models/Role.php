<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;  // Import the User model

class Role extends Model
{
    protected $fillable = ['role'];

    // Define the relationship with User
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
