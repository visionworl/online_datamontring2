<?php

namespace App\Http\Controllers\online;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OnlineDataModel;


class DataController extends Controller
{
 public function create(){
    return view('online.create');
 }

 public function store(Request $request){
    $request->validate([
        'devicename' => 'required',
        'devicelive' => 'required',
    ]);
    $online = new OnlineDataModel();
    //dd($online);
    $online->devicename = $request->input('devicename');
    $online->devicelive = $request->input('devicelive');
    $online->save();

    return redirect()->route('online.show')->with('success', 'Online-Montring-Data is successfully!');

 }
  public function show(){
    $online = OnlineDataModel:: all();
     return view('online.show',compact('online'));
  }
  public function delete($id){
    $online  = OnlineDataModel::find($id);
    if(!$online){
        return redirect()->route('online.show');
    }
    $online->delete();
    return redirect()->route('online.show')->with('delete', 'Online-Montring-Data delete is successfully!');
}
public function editonline(){
    return view('online.edit');
}
public function edit($id)
{
    $online = OnlineDataModel::find($id);
    return view('online.edit', ['online' => $online]);
}
public function update(Request $request, $id){
    $online =  OnlineDataModel::find($id);
    $online->devicename = $request->input('devicename');
    $online->devicelive = $request->input('devicelive');
    //dd($online);
    $online->save();
    return redirect()->route('online.show')->with('success', 'Online-Montring-Data is successfully!');
}
// public function shows($id)
// {
//     $online = OnlineDataModel::find($id);
//     return view('online.show', compact('online'));
// }
  public function shows(){
        return view('online.showdetails');
    }


}
