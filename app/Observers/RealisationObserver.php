<?php

namespace App\Observers;

use App\Models\Realisation;
use Illuminate\Support\Facades\Storage;

class RealisationObserver
{
    /**
     * Handle the Realisation "created" event.
     */
    public function created(Realisation $realisation): void
    {
        //
    }

    /**
     * Handle the Realisation "updated" event.
     */
    public function updated(Realisation $realisation): void
    {
        if ($realisation->isDirty('thumbnail')) {
            Storage::disk('public')->delete($realisation->getOriginal('thumbnail'));
        }
    }

    /**
     * Handle the Realisation "deleted" event.
     */
    public function deleted(Realisation $realisation): void
    {
       if (! is_null($realisation->thumbnail)) {
            Storage::disk('public')->delete($realisation->thumbnail);
        }
    }

    /**
     * Handle the Realisation "restored" event.
     */
    public function restored(Realisation $realisation): void
    {
        //
    }

    /**
     * Handle the Realisation "force deleted" event.
     */
    public function forceDeleted(Realisation $realisation): void
    {
        //
    }
}
