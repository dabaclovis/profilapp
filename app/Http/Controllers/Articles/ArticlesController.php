<?php

namespace App\Http\Controllers\Articles;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->roles == 'user') {
            return view('dashboards.users.articles.index');
        } else {
            return view('dashboards.admins.articles.index');
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.users.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $this->validate($request,[
                'title' => [ 'required','string', 'max:200'],
                'body' => ['required','string','max:3200'],
                'image' => ['image','max:2048','mimes:png,jpg,pdf','nullable'],
            ],[
                'title' => "Enter a descriptive  heading",
                'body' => "Write something beautiful",
            ]);
            if ($request->hasFile('image')) {
                $file = $request->file('image')->getClientOriginalName();
                $filename = $file.'.'.time();
                $path = $request->file('image')->storeAs('images',$filename,'public');
            } else {
                $filename = 'noimage';
            }
                $article = $request->all();
            DB::table('articles')
                ->insert([
                    'title' => $article['title'],
                    'body' => $article['body'],
                    'user_id' => Auth::user()->id,
                    'image' => $filename,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('dashboards.users.articles.show',[
            'article' => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
