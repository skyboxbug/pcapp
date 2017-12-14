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
    	$data = array(
            'title' => 'About this Project',
            'body' => 'This is a PBO Project'
        );
    	return view('pages.about')-> with($data);
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
