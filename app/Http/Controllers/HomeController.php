<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('home.index');
    }

    public function blog()
    {
        $post = Post::all();
        return view('home.blog',compact('post'));
    }

    public function upload(Request $request)
    {
        $data=new Post;

        $data->username=Auth::user()->name;
        $data->description=$request->description;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('post'), $imageName);
            $data->image = $imageName;
        }

        $data->save();

        return redirect()->back();
    }

    public function view_post() 
    {
        $name=Auth::user()->name;
        
        $post = Post::where('username','=',$name)->get();
        
        return view('post_page',compact('post'));   
    }

    public function delete_post($id)
    {
        $data = Post::find($id);

        $data->delete();

        return redirect()->back();
    }

    
    public function update_post($id)
    {
        $data = Post::find($id);

        return view('update_post',compact('data'));
    }

    public function confirm_update(Request $request, $id)
    {
        $data = Post::find($id);

        $data->description=$request->description;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('post'), $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back();
    }
}
