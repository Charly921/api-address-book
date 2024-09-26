<?php

namespace App\Providers;

use App\Interfaces\AddressRepositoryInterface;
use App\Interfaces\ContactRepositoryInterface;
use App\Interfaces\EmailRepositoryInterface;
use App\Interfaces\PhoneRepositoryInterface;
use App\Repositories\AddressRepository;
use App\Repositories\ContactRepository;
use App\Repositories\EmailRepository;
use App\Repositories\PhoneRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(PhoneRepositoryInterface::class, PhoneRepository::class);
        $this->app->bind(EmailRepositoryInterface::class, EmailRepository::class);
        $this->app->bind(AddressRepositoryInterface::class, AddressRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
