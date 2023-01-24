<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $data['categori'] = Categories::all();
        return view('categories', $data);
    }

    public function add(){
        return view('addCategory');
    }
}
