<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath=($this->image) ? $this->image : 'profile/1024px-No_image_available.svg.png';
        return '/storage/' . $imagePath ;
    }

    public function subscriber()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        
            return $this->belongsTo(User::class);
        
    }
}
