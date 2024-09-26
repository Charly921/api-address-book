<?php

namespace App\Repositories;

use App\Interfaces\EmailRepositoryInterface;
use App\Models\Email;

class EmailRepository implements EmailRepositoryInterface 
{
    public function getAllEmails() 
    {
        return Email::all();
    }

    public function getEmailsById($emailId) 
    {
        return Email::findOrFail($emailId);
    }

    public function deleteEmail($emailId) 
    {
        Email::destroy($emailId);
    }

    public function createEmail(array $email) 
    {
        return Email::create($email);
    }

    public function updateEmail($emailId, array $email) 
    {
        return Email::whereId($emailId)->update($email);
    }
}