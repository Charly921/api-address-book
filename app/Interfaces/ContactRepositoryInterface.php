<?php

namespace App\Interfaces;

interface ContactRepositoryInterface 
{
    public function getAllContacts();
    public function getContactsById($contactId);
    public function getContactDetailsById($contactId);
    public function createContact(array $contact);
    public function updateContact($contactId, array $contact);
    public function deleteContact($contactId);
}