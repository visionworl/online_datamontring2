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
        return redirect()->route('data.showdata')->with('success', 'Online-Montring-Data create is successfully!');
    }
     public function showdata(){
        $data= DivicedataModel:: all();
        return view('data.showdata',compact('data'));
     }
     public function edit($id){
        $data = DivicedataModel::find($id);
        $online = DB::table('device_details')->get();
        return view('data.editdata',compact('online','data'));
     }
     public function update(Request $request, $id){
        $data = DivicedataModel::find($id);
        $data->device_id = $request->input('device_id');
        $data->d_value = $request->input('d_value');
        // dd($data);
        $data->save();
        return redirect()->route('data.showdata')->with('success', 'Online-Montring-Data is updated  successfully!');
    }
    public function delete($id){
        $data  = DivicedataModel::find($id);
        if(!$data){
            return redirect()->route('data.showdata');
        }
        $data->delete();
        return redirect()->route('data.showdata')->with('delete', 'Online-Montring-Data delete is successfully!');
    }
    // public function shows(){
    //     return view('data.showdetails');
    // }
    public function shows($id){
        $data = DivicedataModel::with(['online'])->find($id);
        return view('data.showdetails', ['data' => $data]);
    }
}
