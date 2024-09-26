<?php

namespace App\Interfaces;

interface PhoneRepositoryInterface 
{
    public function getAllPhones();
    public function getPhonesById($phoneId);
    public function createPhone(array $phone);
    public function updatePhone($phoneId, array $phone);
    public function deletePhone($phoneId);
}