<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $name = "Donald Trump";
        $age = "75";

        $id = $request->id;

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // return $data;

        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response('')->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
