<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
// Memanggil Model Post

class PostController extends Controller
{
    public function tampil()
    {

        $post = Post::all();
        return view('post.index', compact('post'));
    }

    public function search($id)
    {
        $post = Post::findOrFail($id);
        return $post;
    }

    public function search_title($title)
    {
        $post = Post::where('title', 'like', '%' . $title . '%')->get();
        return $post;
    }

    public function edit($id, $a, $b)
    {

        // Mengedit data Post berdasarkan id
        $post = Post::find($id);
        $post->title = $a;
        $post->content = $b;
        $post->save();
        return $post;
    }

    public function tambah($a, $b)
    {

        // Menambah data baru di Mode Post
        $post = new Post();
        $post->title = $a;
        $post->content = $b;
        $post->save();
        return $post;
    }

    public function hapus($id)
    {

        // Menghapus data di Model Post berdasarkan id
        $post = Post::find($id);
        $post->delete();
        //return $post;
        return redirect('post');
    }
}
