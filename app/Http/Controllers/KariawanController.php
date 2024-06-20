<?php

namespace App\Http\Controllers;
use App\Models\Kariawan; 
use Illuminate\Http\Request;
use Illuminate\View\View;

class KariawanController extends Controller
{
    public function index() : View
{

	//get all kariawan
   $Kariawan = Kariawan::latest()->paginate(10);

   //render view with kariawan
   return view('Kariawan.index', compact('Kariawan'));
	
}
}
