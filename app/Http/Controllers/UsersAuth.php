<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreated;
class UsersAuth extends Controller
{
    //
    function index(){
        event (new UserCreated("Your account has been sent"));
    }
}
