<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
   public function home()
   {

		return view('welcome',[

		'var'=>'laracast',
		'tasks'=>[
					'hello peeps',
					'how is you doing',
					'whats huddin',
					'deuces'
				 ]
]);

   }
   

   public function about()
   {

   		return view('about');

   }

    public function contact()
   {

   		return view('contact');

   }
}
