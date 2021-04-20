<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use DB;
class PhoneController extends Controller
{
    //
    public function index(){
        // belongs to using query builder and eloquent
        $phone = Phone::all();
        // $phone = DB::table('phones')
        // ->join('users','phones.user_id','users.id')
        
        // ->select('phones.*','users.name','users.email')
        // ->get();
        return view('phone', compact('phone'));
    }
}
