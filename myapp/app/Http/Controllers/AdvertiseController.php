<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Advertise;
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
        if($request -> hasFile('image')){
            $data['image'] = $request -> file('image') -> store('images', 'public');
        }
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

    public function update(Request $request, $id)
    {
        $advertise = Advertise::find($id);
        if (!$advertise) {
            return redirect()->route('advertise.index')->with('error', 'Advertise does not exist');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
            'position' => 'required|integer',
            'active' => 'required|boolean',
        ]);

        $data = $request->only('name', 'content', 'position', 'active');

        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu có
            if ($advertise->image) {
                Storage::disk('public')->delete($advertise->image);
            }
            // Lưu ảnh mới
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $advertise->update($data);

        return redirect()->route('advertise.index')->with('success', 'Advertise updated successfully');
    }

    public function destroy(Advertise $advertise)
    {
        $advertise -> delete();
        return redirect() -> route('advertise.index') ->with('success' , 'Advertise deleted successfully');
    }
}
