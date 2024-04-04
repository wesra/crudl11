<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator; // tambahkan baris kode ini
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    // BARIS KODE LAINNYA

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive(); // tambahkan baris kode ini
    }
}