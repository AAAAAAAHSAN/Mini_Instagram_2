<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  Profile extends Model
{
    protected $guarded =[];

    public function profileImage()
    {
        $imagePath = ($this->image)? $this->image: 'profile/5yhJN6S93Yq7n479Pg1hal4RQlIchvYM6LeBQgva.jpeg';
        return '/storage/' . $imagePath;
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
