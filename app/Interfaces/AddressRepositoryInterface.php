<?php

namespace App\Interfaces;

interface AddressRepositoryInterface 
{
    public function getAllAddresses();
    public function getAddressesById($addressId);
    public function createAddress(array $address);
    public function updateAddress($addressId, array $address);
    public function deleteAddress($addressId);
}