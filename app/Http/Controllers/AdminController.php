<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
      $data['Bookcount'] = Books::count();
      $data['categorycount'] = Categories::count();
      $data['usercount'] = User::count();
        return view('dashboard', $data);
   }
}
