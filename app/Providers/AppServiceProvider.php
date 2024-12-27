<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use App\Observers\ProductObserver;
use App\Repositories\PageRepository;
use App\Repositories\ProductRepository;
use App\Repositories\TestimonialRepository;
use App\Repositories\ContactRepository;
use App\Repositories\PartnerRepository;
use App\Services\PageService;
use App\Services\ProductService;
use App\Services\TestimonialService;
use App\Services\ContactService;
use App\Services\PartnerService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Bind repositories to their interfaces
        $this->app->bind(PageRepository::class, function ($app) {
            return new PageRepository(new \App\Models\Page());
        });

        $this->app->bind(ProductRepository::class, function ($app) {
            return new ProductRepository(new \App\Models\Product());
        });

        $this->app->bind(TestimonialRepository::class, function ($app) {
            return new TestimonialRepository(new \App\Models\Testimonial());
        });

        $this->app->bind(ContactRepository::class, function ($app) {
            return new ContactRepository(new \App\Models\Contact());
        });

        $this->app->bind(PartnerRepository::class, function ($app) {
            return new PartnerRepository(new \App\Models\Partner());
        });

        // Bind services to their interfaces
        $this->app->bind(PageService::class, function ($app) {
            return new PageService($app->make(PageRepository::class));
        });

        $this->app->bind(ProductService::class, function ($app) {
            return new ProductService($app->make(ProductRepository::class));
        });

        $this->app->bind(TestimonialService::class, function ($app) {
            return new TestimonialService($app->make(TestimonialRepository::class));
        });

        $this->app->bind(ContactService::class, function ($app) {
            return new ContactService($app->make(ContactRepository::class));
        });

        $this->app->bind(PartnerService::class, function ($app) {
            return new PartnerService($app->make(PartnerRepository::class));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register model observers
        Product::observe(ProductObserver::class);
    }
}
