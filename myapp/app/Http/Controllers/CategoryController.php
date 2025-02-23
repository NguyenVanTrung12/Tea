<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat = Category::orderBy('id', 'desc')->paginate(5);
        return view("admin.category.index", compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $data = $request->all('name', 'title', 'description', 'image', 'index', 'active');
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }
        Category::create($data);
        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $category = Category::find($id);

    if (!$category) {
        return redirect()->route('categories.index')->with('error', 'Danh mục không tồn tại!');
    }

    // Kiểm tra dữ liệu trước khi cập nhật
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'active' => 'required|boolean',
    ]);

    if ($request->hasFile('image')) {
        // Xóa ảnh cũ nếu có
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }
        // Lưu ảnh mới
        $validated['image'] = $request->file('image')->store('images', 'public');
    }

    // Cập nhật dữ liệu
    $category->update($validated);

    return redirect()->route('categories.index')->with('success', 'Cập nhật danh mục thành công!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
