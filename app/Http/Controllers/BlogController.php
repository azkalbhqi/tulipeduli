<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs =Blog::all();
        return view('blog.blogs',['title' => 'blog BISINDO'], compact('blogs'));
    }

    public function show($slug)
    {
        $blog =Blog::findOrFail($slug);
        return view('blog.blog',['title' => 'blog BISINDO'], compact('blog'));
    }
    public function adminIndex()
    {
        $blogs =Blog::all();
        return view('admin.blogs.blogs',['title' => 'blog  '], compact('blogs'));
    }

    public function adminShow($slug)
{
    $blog = Blog::where('slug', $slug)->firstOrFail();

    return view('admin.blogs.blog', ['title' => 'blog'],compact('blog'));
}
    public function create()
    {
        return view('admin.blogs.create', ['title' => 'Buat Blog']);
    }
    
    public function store(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string', // Ensure the konten is a valid URL
            'slug' => 'required|string|max:255', // Ensure the konten is a valid URL
        ]);

        // Create a newBlog instance and store it in the database
       Blog::create([
            'judul' => $validated['judul'],
            'konten' => $validated['konten'],
            'slug' => $validated['slug'],
            // Store the YouTube konten
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'blog created successfully.');

    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
    //

    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('admin.blogs.edit', ['title' => 'Edit Blog'], compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        // Validate input data
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'slug' => 'required|string|max:255',
        ]);
    
        // Update the blog
        $blog->update($validated);
    
        // Redirect with success message
        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

}
