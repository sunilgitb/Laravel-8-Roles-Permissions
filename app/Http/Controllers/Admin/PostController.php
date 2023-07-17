<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
use Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Post access|Post create|Post edit|Post delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Post create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Post edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Post delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Post= Post::paginate(4);

        return view('post.index',['posts'=>$Post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts= Post::all();
        return view('post.new', ['posts'=>$posts]);
    }

    public function posts(){
        $posts = Post::select('id', 'title', 'description')->latest()->get();

        foreach ($posts as $blog) {
            $blog->description = Str::limit($blog->description, 150);
        }
    
        return view('posts', compact('posts'));

    }
    public function showMore(){
        $posts = Post::select('id', 'title', 'description')->latest()->get();

        foreach ($posts as $blog) {
            $blog->description = Str::limit($blog->description, 150);
        }
    
        return view('blog', compact('posts'));
    }

    public function showBlog($id)
    {
        $post = Post::findOrFail($id);

        return view('frontend.blog.show', compact('post'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $data= $request->all();
    //     $data['user_id'] = Auth::user()->id;
    //     $Post = Post::create($data);
    //     return redirect()->back()->withSuccess('Post created !!!');
    // }
    public function store(Request $request)
{
    $data = $request->all();
    $data['user_id'] = Auth::user()->id;

    // Upload the image
    $image = $request->file('image');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('post/images'), $imageName);;

    

    $data['image'] = $imageName;

    $Post = Post::create($data);

    return redirect()->back()->withSuccess('Post created !!!');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
       return view('post.edit',['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->back()->withSuccess('Post updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Post deleted !!!');
    }
}
