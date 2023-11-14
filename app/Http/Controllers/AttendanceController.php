<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
class AttendanceController extends Controller
{
    public function listOfAll(){
        $attendances = Attendance::all();
        return view('user.pages.home', ["data"=>$attendances]);
    }

    public function listById($id){
        $user = Auth::user();
        $attendances = Attendance::where('userId', $id)->get();
        return view('user.pages.home', ["data"=>$attendances]);
    }


}
