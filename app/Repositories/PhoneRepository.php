<?php

namespace App\Repositories;

use App\Interfaces\PhoneRepositoryInterface;
use App\Models\Phone;

class PhoneRepository implements PhoneRepositoryInterface 
{
    public function getAllPhones() 
    {
        return Phone::all();
    }

    public function getPhonesById($phoneId) 
    {
        return Phone::findOrFail($phoneId);
    }

    public function deletePhone($phoneId) 
    {
        Phone::destroy($phoneId);
    }

    public function createPhone(array $phone) 
    {
        return Phone::create($phone);
    }

    public function updatePhone($phoneId, array $phone) 
    {
        return Phone::whereId($phoneId)->update($phone);
    }
}