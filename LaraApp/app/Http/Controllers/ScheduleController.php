<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $dataArr = ["code" => "ABC123", "credit" => 3, "start_time" => "Senin, 12 April 2023", "end_time" => "Selasa, 17 April 2023"];
        $dataArr1 = ["code" => "ABC124", "credit" => 3, "start_time" => "Selasa, 12 April 2023", "end_time" => "Selasa, 17 April 2023"];
        $dataArr2 = ["code" => "ABC125", "credit" => 3, "start_time" => "Rabu, 12 April 2023", "end_time" => "Selasa, 17 April 2023"];
        $dataArr3 = ["code" => "ABC126", "credit" => 3, "start_time" => "Kamis, 12 April 2023", "end_time" => "Selasa, 17 April 2023"];
        $dataCourse = array($dataArr,$dataArr1,$dataArr2,$dataArr3);

        return view('schedule')->with('data',array("lect"=>$dataArr, "course"=>$dataCourse));
    }
}