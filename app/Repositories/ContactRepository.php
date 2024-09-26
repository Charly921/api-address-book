<?php

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface 
{
    public function getAllContacts() 
    {
        return Contact::all();
    }

    public function getContactsById($contactId) 
    {
        return Contact::findOrFail($contactId);
    }

    public function getContactDetailsById($contactId){
        $contact = Contact::findOrFail($contactId);
        $data = [];
        $data['contact'] = $contact;
        $data['phones'] = $contact->phones;
        $data['emails'] = $contact->emails;
        $data['addresses'] = $contact->addresses;
        return $data;
    }

    public function deleteContact($contactId) 
    {
        Contact::destroy($contactId);
    }

    public function createContact(array $contact) 
    {
        return Contact::create($contact);
    }

    public function updateContact($contactId, array $contact) 
    {
        return Contact::whereId($contactId)->update($contact);
    }
}