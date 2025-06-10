<?php

namespace App\Observers;

use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerObserver
{
    /**
     * Handle the Partner "created" event.
     */
    public function created(Partner $partner): void
    {
        //
    }

    /**
     * Handle the Partner "updated" event.
     */
    public function updated(Partner $partner): void
    {
           if ($partner->isDirty('thumbnail')) {
            Storage::disk('public')->delete($partner->getOriginal('thumbnail'));
        }
    }

    /**
     * Handle the Partner "deleted" event.
     */
    public function deleted(Partner $partner): void
    {
          if (! is_null($partner->thumbnail)) {
            Storage::disk('public')->delete($partner->thumbnail);
        }
    }

    /**
     * Handle the Partner "restored" event.
     */
    public function restored(Partner $partner): void
    {
        //
    }

    /**
     * Handle the Partner "force deleted" event.
     */
    public function forceDeleted(Partner $partner): void
    {
        //
    }
}
