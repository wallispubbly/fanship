<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserInfo;
use App\Fandom;
use App\FandomTag;

class ProfileController extends Controller
{
    public function show(User $user) {
        //$userInfo = $user->getUserInfo();
        // $userInfo = UserInfo::find(1)->user;
        //dd($user->userInfo());
        //dd(UserInfo::find(1)->user);

        $userProfileInfo = UserInfo::with('user')->find($user->id);

        $userFandomTags = FandomTag::with('user')->find(3);
        dd($userFandomTags);
        
        return view('profiles.show', compact(['user','userProfileInfo']));
    }
}
