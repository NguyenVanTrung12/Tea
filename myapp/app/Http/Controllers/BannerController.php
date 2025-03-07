<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bn = banner::orderBy('id', 'desc')->paginate(10);
        
        return view("admin.banner.index", compact('bn'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $data = $request->all('name',  'image', 'status');
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }
        Banner::create($data);
        return redirect()->route('banner.index')->with('success', 'Banner created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $banner = Banner::find($id);

    if (!$banner) {
        return redirect()->route('categories.index')->with('error', 'Danh mục không tồn tại!');
    }

    // Kiểm tra dữ liệu trước khi cập nhật
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|boolean',
    ]);

    if ($request->hasFile('image')) {
        // Xóa ảnh cũ nếu có
        if ($banner->image) {
            Storage::disk('public')->delete($banner->image);
        }
        // Lưu ảnh mới
        $validated['image'] = $request->file('image')->store('images', 'public');
    }

    // Cập nhật dữ liệu
    $banner->update($validated);

    return redirect()->route('banner.index')->with('success', 'Cập nhật danh mục thành công!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner deleted successfully');
    }
}
