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

    public function show($id)
    {
        $blog =Blog::findOrFail($id);
        return view('blog.blog',['title' => 'blog BISINDO'], compact('blog'));
    }
    public function adminIndex()
    {
        $blogs =Blog::all();
        return view('admin.blogs.blogs',['title' => 'blog  '], compact('blogs'));
    }

    public function adminShow($id)
{
    $blog =Blog::findOrFail($id);

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

    }

    public function destroy(blog $blog)
{
    $blog->delete();

    // Add a success message or redirect to a specific route
    return redirect()->route('admin.blogs.blogs')->with('success', 'blog deleted successfully.');
}

}
