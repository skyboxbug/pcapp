<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobo;
use App\cpu;


class PagesController extends Controller
{
    public function home(Request $request){
    	$title = 'Home';
        $request->session()->flush();
    	return view('pages.home')-> with('title', $title);
    }
    public function about(){
    	$data = array(
            'title' => 'About this Project',
            'body' => 'This is a PBO Project'
        );
    	return view('pages.about')-> with($data);
    }


    // The more components you add you have to add it here, match it with Route URL
    // Example :
    //  public function homeWithData(Request $request, $mobo, $cpu, $optical, $ram, ETC) {

    public function homeWithData(Request $request, $mobo, $cpu){
        $title = 'Home';
        if ($mobo) {
            //IF there is a mother board ID attached to the URL get the mother board
            $mobo_data = mobo::find($mobo);
        }
        else {
            //IF not, just send the default value to the home page
            $mobo_data['name'] = 'Mother Board';
        }

        if ($cpu) {
            //IF there is a CPU ID attached to the URL get the mother board
            $cpu_data = cpu::find($cpu);
        }
        else {
            //IF not, just send the default value to the home page
            $cpu_data['name'] = 'CPU';
        }

        return view('pages.home', ['title' => $title, 'mobo' => $mobo_data, 'cpu' => $cpu_data]);
    }

    public function add(Request $request, $id){
        dd($id);
    }

    public function admin(){
    	$title = 'Admin Page';
    	return view('pages.admin')-> with('title', $title);
    }
}
