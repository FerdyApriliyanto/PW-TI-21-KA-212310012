<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return "Welcome to Profile page";
    }
    public function identity()
    {
        return "Welcome to Profile page sub menu identity";
    }
    public function family()
    {
        return "Welcome to Profile page sub menu family";
    }
}