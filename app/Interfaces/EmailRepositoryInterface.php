<?php

namespace App\Interfaces;

interface EmailRepositoryInterface 
{
    public function getAllEmails();
    public function getEmailsById($emailId);
    public function createEmail(array $email);
    public function updateEmail($emailId, array $email);
    public function deleteEmail($emailId);
}