<?php

namespace Spatie\MediaLibrary\Conversions\Events;

use Illuminate\Queue\SerializesModels;
use Spatie\MediaLibrary\Conversions\Conversion;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ConversionHasBeenCompleted
{
    use SerializesModels;

    public function __construct(public Media $media, public Conversion $conversion)
    {
    }
}
