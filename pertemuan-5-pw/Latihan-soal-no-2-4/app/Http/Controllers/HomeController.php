<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = collect([
            ["course" => "Matematika", "type" => "Diskrit", "rate" => 4],
            ["course" => "Matematika", "type" => "Aljabar Linear", "rate" => 3],
            ["course" => "Basis Data", "type" => "DDL", "rate" => 2],
            ["course" => "Bhs Inggris", "type" => "Speaker", "rate" => 1]
        ]);

        $unique = $data->unique("course");
        $unique->values()->all();

        return view("home")->with("unique", $unique)->with("data", $data);
    }
}