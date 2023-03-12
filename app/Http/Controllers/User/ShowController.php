<?php

namespace App\Http\Controllers\User;

use App\Http\Resources\UserResource;
use App\Models\User;

class ShowController extends BaseController
{
    public function __invoke($userId){

        $user = User::find($userId);
        return new UserResource($user);
    }
}
