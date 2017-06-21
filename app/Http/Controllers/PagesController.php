<?php

	namespace App\Http\Controllers;

	class PagesController extends Controller {

		public function getIndex(){
			return view('pages.welcome');
		}

		public function getBookbus(){
			return view('pages.bookbus');
		}

		public function getBooktheater(){
			return view('pages.booktheater');
		}
	}