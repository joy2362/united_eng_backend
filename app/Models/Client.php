<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Client extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $appends = ['Logo'];
    protected $guarded = [];
    /**
     * Register the media collections
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('ClientLogo')->singleFile();
    }

    public function getLogoAttribute()
    {
        return $this->getFirstMediaUrl('ClientLogo');
    }
}
