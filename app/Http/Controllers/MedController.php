<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedController extends Controller
{
    public function create()
    {
        return view('medicines/create');
    }
 
    public function createPost(Request $request)
    {
        $medicine = new Medicine();
 
        $medicine->name = $request->name;
        $medicine->quantity = $request->quantity;
        
        $medicine->save();
        return view('medicines/create')->with('success', 'Register successfully');
    }

    public function showList()
    {
        $medicines = Medicine::get(); 
        return view('medicines/index', ['medicines' => $medicines]);
    }

    public function edit(int $id){
        $medicine = Medicine::findOrFail($id);
        return view('medicines.edit',compact('medicine'));
    }
    
    public function update(Request $request,int $id){
        Medicine::findOrFail($id)->update([
            'name'=>$request->name,
            'quantity' => $request->quantity,
        ]);
    
        $medicines = Medicine::get();
        return view('medicines.index',compact('medicines'));
    }
    
    public function delete(int $id){
        $medicine = Medicine::find($id);
        $medicine->delete();
    
        return redirect()->route('medicines.index');
    }
}
