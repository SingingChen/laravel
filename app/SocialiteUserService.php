<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016/8/24
 * Time: 上午 10:17
 */

namespace App;


class SocialiteUserService
{
//public function
public function checkUser(VendorUser $vendor_user){
    $account = SocialiteUser::whereVendor("facebook")->whereVendorUserId($vendor_user->getId())->first();

    if($account){
        return $account->user;
    }
    else{
        $account = new SocialiteUser([
            "vendor"=>"facebook",
            "vendor_user_id"=>$vendor_user->getId(),
        ]);

        $user =User::whereEmail($vendor_user->getEmail())->first();
        if(!$user){

            $user = User::create([
                "email" => $vendor_user->getEmail(),
                "name" =>$vendor_user->getName(),
            ]);
        }

        $account->user()->associate($user);
        $account->save();

        return $user;
    }
}
}