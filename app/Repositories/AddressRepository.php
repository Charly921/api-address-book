<?php

namespace App\Repositories;

use App\Interfaces\AddressRepositoryInterface;
use App\Models\Address;

class AddressRepository implements AddressRepositoryInterface 
{
    public function getAllAddresses() 
    {
        return Address::all();
    }

    public function getAddressesById($addressId) 
    {
        return Address::findOrFail($addressId);
    }

    public function deleteAddress($addressId) 
    {
        Address::destroy($addressId);
    }

    public function createAddress(array $address) 
    {
        return Address::create($address);
    }

    public function updateAddress($addressId, array $address) 
    {
        return Address::whereId($addressId)->update($address);
    }
}