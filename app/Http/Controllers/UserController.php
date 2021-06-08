<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

    }
    public function create()
    {
        return view('user.create');
    }
    public function details($id)
    {
        echo $id;
    }

    public function edit($id)
    {
        echo $id;
    }

    public function update(Request $reg, $id)
    {
        echo $id;
    }

    public function delete($id)
    {
        echo $id;
    }

    public function destroy($id)
    {
        echo $id;
    }
    public function list()
    {
        $users = [
            ['id'=>1,'username'=>'hridoy','password'=>'123','email'=>'admin@gmail.com','type'=>'admin'],
            ['id'=>2,'username'=>'rabeya','password'=>'xyz','email'=>'rabeya@gmail.com','type'=>'user'],
            ['id'=>3,'username'=>'ononna','password'=>'abc','email'=>'onu@gmail.com','type'=>'user'],
            ['id'=>4,'username'=>'khalid','password'=>'123','email'=>'khalid@gmail.com','type'=>'employee'],

        ];
        return view('user.userlist')->with('userlist',$users);
    }
}
