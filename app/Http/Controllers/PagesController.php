<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	$title = 'Home';
    	return view('pages.home')-> with('title', $title);
    }

    public function about(){
    	$title = 'About';
    	return view('pages.about')-> with('title', $title);
    }
    public function cpu(){
    	$title = 'Pick a CPU';
    	return view('pages.cpu')-> with('title', $title);
    }
    public function admin(){
    	$title = 'Admin Page';
    	return view('pages.admin')-> with('title', $title);
    }
    public function testingfilter(){
    	$title = 'FilterTesting';
    	return view('showpart.filtertest')-> with('title', $title);
    }
}
