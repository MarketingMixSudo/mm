<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Partner;
use App\Models\Realisation;
use App\Models\Testimonial;
use App\Observers\PostObserver;
use App\Observers\PartnerObserver;
use App\Observers\RealisationObserver;
use App\Observers\TestimonialObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Post::observe(PostObserver::class);
        Realisation::observe(RealisationObserver::class);
        Testimonial::observe(TestimonialObserver::class);
        Partner::observe(PartnerObserver::class);
    }
}
