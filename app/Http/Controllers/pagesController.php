<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index() {
    	$title='Welcome to laravel';
    	//return view('pages.index',compact('title'));
    	return view('pages.index')->with('title',$title);
    }

    public function about() {
    	$title='About us';
    	//return view('pages.about');
    	return view('pages.about')->with('title',$title);
    }

    public function services() {
    	//return view('pages.services');
    	$data = array(
    		'title' => 'services',
    		'services' => ['Web Design','programming','SEO']
    	);
    	return view('pages.services')->with($data);
    }
}
