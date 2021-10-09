<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request){
        return 'Hello, from Lumen! We got your request from endpoint: ' . $request->path();
    }

    public function tambahUser(){
        User::create([
            'name' => 'Marchenda Fayza',
            'email' => 'marchendafayzam@gmail.com',
            'password' => '123456'
        ]);
        return 'It Works!';
    }

    public function ubahUser(Request $request, $id){
        User::where('id', $id)->update($request->all());
        return response()->json(['message'=>'Data berhasil diubah!']);
    }

    public function hello(Request $request){
        $data['status'] = 'Success';
        $data['nama'] = $request->nama;
        $data['message'] = 'Hello, from lumen!';
        return (new Response($data, 201))->header('Content-Type', 'application/json');
    }
}
