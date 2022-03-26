<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $appends = ['AppLogo','AppIcon','AboutUsImage'];

    /**
     * Register the media collections
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('app_logo')->singleFile();
        $this->addMediaCollection('app_icon')->singleFile();
        $this->addMediaCollection('feather_image')->singleFile();
    }

    public function getAppLogoAttribute()
    {
        return $this->getFirstMediaUrl('app_logo');
    }

    public function getAppIconAttribute()
    {
        return $this->getFirstMediaUrl('app_icon');
    }

    public function getAboutUsImageAttribute()
    {
        return $this->getFirstMediaUrl('feather_image');
    }
}
