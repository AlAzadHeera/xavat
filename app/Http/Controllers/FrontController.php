<?php

namespace App\Http\Controllers;

use App\Category;
use App\Portfoliio;
use App\Portfolio;
use App\Say;
use App\Subscribe;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index(){
        $testimonials = Say::all();
        return view('welcome',compact('testimonials'));
    }

    public function about(){
        return view('pages.about');
    }

    public function service(){
        return view('pages.services');
    }

    public function team(){
        $teams = Team::all();
        return view('pages.team',compact('teams'));
    }

    public function portfolio(){
        $portfolios = DB::table('portfolios')
            ->join('categories', 'portfolios.category', '=', 'categories.id')
            ->select('portfolios.*', 'categories.cat_name')
            ->get();
        $categories = Category::all();
        return view('pages.portfolio',compact('portfolios','categories'));
    }

    public function contact(){
        return view('pages.contact');
    }

    public function storeSubscriber(Request $request){
        $this->validate($request,[
            'email' => 'email | required | unique',
        ]);

        $subscriber = new Subscribe();
        $subscriber->email = $request->email;
        $subscriber->save();

        return Redirect::to('/welcome');
    }

}
