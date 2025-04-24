<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('admin.users.userdetails'); // View users page and management
    }
    public function show($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}
