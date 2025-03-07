<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = News::with('category')->orderBy('created_at', 'desc');

        if ($request->has('search') && $request->search != '') {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('name', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->has('status') && $request->status != '') {

            $query->where('active', $request->status);
        }

        $news = $query->get();


        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = Category::all();
        return view('admin.news.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $data = $request->all('categoryId', 'name', 'image', 'date', 'detail', 'content', 'title', 'description', 'active');
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }
        News::create($data);

        return redirect()->route('news.index')->with('success', 'News created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        $cat = Category::all();
        return view('admin.news.show', compact('news', 'cat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $cat = Category::all();
        return view('admin.news.edit', compact('news', 'cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $news = News::find($id);

    if (!$news) {
        return redirect()->route('news.index')->with('error', 'News not found');
    }

    // Validate input
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'active' => 'required|boolean', // Kiểm tra active có giá trị hợp lệ
    ]);

    // Nếu có file ảnh thì xử lý lưu ảnh
    if ($request->hasFile('image')) {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $validated['image'] = $request->file('image')->store('images', 'public');
    }

    // Cập nhật dữ liệu
    $news->update($validated);

    return redirect()->route('news.index')->with('success', 'News updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index')->with('success', 'News deleted successfully');
    }
}
