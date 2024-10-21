<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'mobilenumber',
        'emailaddress',
        'username',
        'password',
        'profile_picture',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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

    /**
     * Get the profile image URL or a default image if none is provided.
     *
     * @return string
     */
        
    public function getProfileImage()
    {
        

        // If the user has a profile picture, return its URL; otherwise, return the default icon URL
        if ($this->profile_picture) {
            return asset('storage/' . $this->profile_picture); // Assuming profile images are stored in 'storage/app/public'
        }

        return asset('images/user icon.png'); // Default image if no profile picture is uploaded
    }

}
