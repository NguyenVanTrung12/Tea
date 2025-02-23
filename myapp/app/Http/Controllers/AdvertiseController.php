<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use Faker\Provider\ar_EG\Address;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    public function index()
    {
        $ad = Advertise::orderBy('id', 'desc')->paginate(10);
        
        return view("admin.advertise.index", compact('ad'));
    }
    public function create()
    {
        return view('admin.advertise.create');
    }
    public function store(Request $request)
    {
        $data = $request -> all('name', 'image'  , 'content' , 'position' , 'active');
        
        Advertise::create($data);
        return redirect() -> route('advertise.index') -> with('success','Advertise created successfully');
    }
    public function show(Advertise $advertise)
    {
        
    }

    public function edit(Advertise $advertise)
    {
        return view('admin.advertise.edit' , compact('advertise'));
    }

    public function update(Request $request,  $id)
    {
        $advertise = Advertise::find($id);
        if (!$advertise) {
            return redirect()->route('advertise.index')->with('error', 'Advertise does not exist');
        }

        $data = $request->all('name', 'image', 'content', 'position', 'active');
        $advertise->update($data);

        return redirect()->route('advertise.index')->with('success', 'Advertise updated successfully');
    }

    public function destroy(Advertise $advertise)
    {
        $advertise -> delete();
        return redirect() -> route('advertise.index') ->with('success' , 'Advertise deleted successfully');
    }
}
