<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'notes',
        'birth_date',
        'web_page',
        'company'
    ];

    //Get the phones for the contact
    public function phones(){
        return $this->hasMany(Phone::class);
    }

    //Get the emails for the contact}
    public function emails(){
        return $this->hasMany(Email::class);
    }

    //Get the addresses for the contact
    public function addresses(){
        return $this->hasMany(Address::class);
    }
}
