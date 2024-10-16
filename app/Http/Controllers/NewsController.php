<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create() {
        return view('news.create');
    }
    
    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'body' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news_images', 'public');
        }
    
        $news = News::create($data);
    
        return redirect()->route('news.show', $news);
    }
    
    public function show(News $news) {
        return view('news.show', compact('news'));
    }
    
    
}
