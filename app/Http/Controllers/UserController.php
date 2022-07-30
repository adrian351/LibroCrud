<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //  obtener al usuario logueado
    public function index($id){
        $user = User::find($id);
        return view('user.index', compact('user'));
    }
}
