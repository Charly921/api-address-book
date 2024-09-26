<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Contact;
use App\Models\Email;
use App\Models\Phone;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::factory(5000)
            ->create()
            ->each(function (Contact $contact) {
                Address::factory(rand(0, 1))
                ->create([
                    'contact_id' => $contact->id,
                ]);
                Email::factory(rand(0, 2))
                ->create([
                    'contact_id' => $contact->id,
                ]);
                Phone::factory(rand(0, 2))
                ->create([
                    'contact_id' => $contact->id,
                ]);
            });
    }
}
