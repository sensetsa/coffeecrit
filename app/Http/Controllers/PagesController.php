<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('pages.index')->with('posts', $posts);
    }
    public function show($category){
        $posts = DB::table('posts')->where('category', $category)->get();
        return view('pages.index')->with('posts', $posts);
    }
    public function getmsg(Request $request){
        $msg = $request->input('msg');
        return response()->json(array('msg' => $msg), 200);
    }
}
