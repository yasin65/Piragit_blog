<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use App\Post;
use App\Category;
use App\Tag;
use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('admin.dashboard.index');
    }




    public function index()
    {
        $posts=Post::with('category', 'user')->orderBy('created_at','DESC')->take(5)->get();

        $firstpost2 = $posts->splice(0, 2);
        $middlepost = $posts->splice(0, 1);
        $lastpost = $posts->splice(0);

        $footerposts=Post::with('category')->inRandomOrder()->limit(4)->get();
        $ffooterpost=$footerposts->splice(0,1);
        $mfooterpost2=$footerposts->splice(0,2);
        $lfooterpost=$footerposts->splice(0,1);

        $recentposts=Post::with('category', 'user')->orderBy('created_at','DESC')->paginate(3);

        return view('website.home',compact(['posts','recentposts','firstpost2','middlepost','lastpost','ffooterpost','mfooterpost2','lfooterpost']));
    }
    public function about()
    {
        return view('website.about');
    }

    public function tag($slug, Request $request){
        $tag=Tag::where('slug',$slug)->first();
        dd($request->all);
        if ($tag) {
            $posts=$tag->posts()->orderBy('created_at','desc')->paginate(3);

            return view('website.tag',compact(['tag',
                'posts']));
        }else{
            echo "There is no tag";
        }
        
    }

    public function post($slug)
    {
        $post=Post::with('category', 'user')->where('slug',$slug)->first();
        $posts=Post::with('category', 'user')->inRandomOrder()->limit(3)->get();

        $relatedpost=Post::orderBy('category_id','desc')->inRandomOrder()->take(4)->get();
        $relatedpost11 = $relatedpost->splice(0, 1);
        $relatedpost22 = $relatedpost->splice(0, 2);
        $relatedpost31 = $relatedpost->splice(0, 1);

        $categories = Category::all();
        $tags=Tag::all();
        $users=User::all();
        if ($post) {
            return view('website.post',compact(['post','tags','categories','posts','relatedpost11','relatedpost22','relatedpost31','users']));
        }else{
            return redirect('/');
        }
        
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function category($slug)
    {
        $category=Category::where('slug',$slug)->first();
        if ($category) {
            $posts=Post::where('category_id',$category->id)->paginate(2);

            return view('website.category',compact(['category','posts']));
        }else{
            echo "there is no post";
        }
        
    }

    public function send_message(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'name' => 'required|max:200',
            'email' => 'required|email|max:200',
            'subject' => 'required|max:255',
            'message' => 'required|min:10',
        ]);

        $contact = Contact::create($request->all());

        Session::flash('message-send', 'Contact message send successfully');
        return redirect()->back();
    }





}
