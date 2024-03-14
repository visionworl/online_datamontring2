<?php

namespace App\Http\Controllers\online;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\DivicedataModel;
use App\Models\OnlineDataModel;
class DivicedataController extends Controller
{
     public function createdata(){
        $online = DB::table('device_details')->get();
        return view('data.createdata',compact('online'));
     }
     public function createstore(Request $request){
        $request->validate([
            'device_id' =>  'required',
            'd_value' => 'required',
        ]);
        $data = new DivicedataModel();
        $data->device_id = $request->input('device_id');
        $data->d_value = $request->input('d_value');
        // dd($data);
        $data->save();
        return redirect()->route('data.createdata')->with('success', 'Online-Montring-Data is successfully!');
    }
     public function showdata(){
        $data= DivicedataModel:: all();
        return view('data.showdata',compact('data'));
     }
}
