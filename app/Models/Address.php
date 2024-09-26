<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'street',
        'colony',
        'number',
        'city',
        'contact_id'
    ];

    //Get the contact that owns the address
    public function contact(){
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
