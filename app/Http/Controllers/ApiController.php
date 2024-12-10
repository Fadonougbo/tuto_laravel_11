<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagCollection;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(User $user) {
        //return new UserResource(User::all());
        //return UserResource::collection(User::paginate(1));
        //dump([User::limit(1)->get()],User::firstOrFail(),User::all());
        //return UserResource::collection(User::paginate(1));
        /* dump(Tag::all()); */
        //dump(Tag::first()->user);
        return   new TagCollection(Tag::all());
        /*  return   new TagCollection(Tag::with(['user'])->get()); */
        //return new UserCollection(User::all());
    }
}
