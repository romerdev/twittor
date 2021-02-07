<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {

        $imagePath = ($this->image) ? $this->image : 'profile/k4nY5GUC3r75SF2ieIywe7yZWSQYs3N0DIpv0c7Y.png';
        return Storage::disk('public')->url($imagePath);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
