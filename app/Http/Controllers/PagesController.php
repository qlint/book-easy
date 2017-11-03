<?php

	namespace App\Http\Controllers;

	class PagesController extends Controller {

		public function getIndex(){
			return view('welcome');
		}

		public function getBookbus(){
			return view('bookbus');
		}

		public function getBooktheater(){
			return view('booktheater');
		}
	}