<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Gallery extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $appends = ['GalleryImage'];
    protected $guarded = [];

    /**
     * Register the media collections
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('GalleryImage')->singleFile();
    }

    public function getGalleryImageAttribute()
    {
        return $this->getFirstMediaUrl('GalleryImage');
    }
}
