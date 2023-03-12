<?php

namespace App\Http\Controllers\User;

use App\Http\Resources\IndexUserResource;
use App\Models\User;

class IndexController extends BaseController
{
    public function __invoke(){
        $users = User::all();
        return IndexUserResource::collection($users);
    }
}
