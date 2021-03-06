<?php

namespace App\Http\Controllers;

use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{
    public function show(){
        $commits = GitHub::repo()->commits()->all('adamwoodhead', 'avalanche-calculator', array('sha' => 'main'));
        
        return View::make('about', [
            'commits' => $commits,
        ]);
    }
}
