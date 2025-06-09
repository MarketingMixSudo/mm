<?php

namespace App\Observers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialObserver
{
    /**
     * Handle the Testimonial "created" event.
     */
    public function created(Testimonial $testimonial): void
    {
        //
    }

    /**
     * Handle the Testimonial "updated" event.
     */
    public function updated(Testimonial $testimonial): void
    {
        if ($testimonial->isDirty('thumbnail')) {
            Storage::disk('public')->delete($testimonial->getOriginal('thumbnail'));
        }
    }

    /**
     * Handle the Testimonial "deleted" event.
     */
    public function deleted(Testimonial $testimonial): void
    {
         if (! is_null($testimonial->thumbnail)) {
            Storage::disk('public')->delete($testimonial->thumbnail);
        }
    }

    /**
     * Handle the Testimonial "restored" event.
     */
    public function restored(Testimonial $testimonial): void
    {
        //
    }

    /**
     * Handle the Testimonial "force deleted" event.
     */
    public function forceDeleted(Testimonial $testimonial): void
    {
        //
    }
}
