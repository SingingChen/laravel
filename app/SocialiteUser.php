<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialiteUser extends BaseModel
{
    protected $fillable =[
        'vendor',"vendor_user_id",'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
