<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Room extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;


    protected $fillable = [
        'name', 'room_type_id', 'hotel_id', 'bed_type_id', 'room_capacity_adult', 'room_capacity_child', 'base_price', 'is_active', 'hotel_id',
    ];
    public function bedType()
    {
        return $this->hasOne(BedType::class);
    }
    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('gallery')
            ->useFallbackUrl('/images/placeholder.jpg')
            ->useFallbackPath(public_path('/images/placeholder.jpg'));
    }

    public function featureImage()
    {
        $thumbnail = $this->getFirstMediaUrl('gallery', 'thumb');
        return strlen($thumbnail) > 0 ? $thumbnail :
            '/images/placeholder.jpg';
    }
}
