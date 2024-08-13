<?php

namespace App\Http\Controllers;

use App\Models\welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return welcome::all();
        
    }
}
