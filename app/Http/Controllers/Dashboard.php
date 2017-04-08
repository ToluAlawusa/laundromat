<?php

namespace App\Http\Controllers;

class Dashboard extends Controller {
    
    public function showDashboard () {
        
        return view('dashboard');
    }
}