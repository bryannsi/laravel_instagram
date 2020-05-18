<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : "/profile/iGOvNEUUkwMh4ejkCVppS97JsqhvSa8BIWE2ztsu.png";
        return '/storage/' . $imagePath;
    }

}
