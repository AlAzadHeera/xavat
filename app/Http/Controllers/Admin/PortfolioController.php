<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Share;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.portfolio.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'category' => 'required',
            'client' => 'required',
            'heading_one' => 'required',
            'heading_two' => 'required',
            'para_one' => 'required',
            'para_two' => 'required',
            'link'         => 'required',
            'thumbnail'       => 'required | mimes:jpg,jpeg,png',
            'pimage_one'       => 'required | mimes:jpg,jpeg,png',
            'pimage_two'       => 'required | mimes:jpg,jpeg,png',
        ]);

        /*return $request->all();*/

        $thumbnail = $request->file('thumbnail');
        $firstImage = $request->file('pimage_one');
        $secondImage = $request->file('pimage_two');
        $slug = str_slug($request->heading_one);

        //Thumbnail

        if (isset($thumbnail)){
            $currentDate = Carbon::now()->toDateString();
            $thumbName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$thumbnail->getClientOriginalExtension();

            if (!file_exists('uploads/portfolio/')){
                mkdir('uploads/portfolio',007,true);
            }else{
                $thumbnail->move('uploads/portfolio',$thumbName);
            }

        }else{
            $thumbName = 'default.png';
        }

        //First Paragraph Image

        if (isset($firstImage)){
            $currentDate = Carbon::now()->toDateString();
            $firstImageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$firstImage->getClientOriginalExtension();

            if (!file_exists('uploads/portfolio')){
                mkdir('uploads/portfolio',007,true);
            }else{
                $firstImage->move('uploads/portfolio',$firstImageName);
            }

        }else{
            $firstImageName = 'default.png';
        }

        //Second Paragraph Image

        if (isset($secondImage)){
            $currentDate = Carbon::now()->toDateString();
            $secondImageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$secondImage->getClientOriginalExtension();

            if (!file_exists('uploads/portfolio')){
                mkdir('uploads/portfolio',007,true);
            }else{
                $secondImage->move('uploads/portfolio',$secondImageName);
            }

        }else{
            $secondImageName = 'default.png';
        }

        $portfolion = new Portfolio();
        $portfolion->name = $request->name;
        $portfolion->client = $request->client;
        $portfolion->category = $request->category;
        $portfolion->dheading_one = $request->heading_one;
        $portfolion->dheading_two = $request->heading_two;
        $portfolion->dpara_one = $request->para_one;
        $portfolion->dpara_two = $request->para_two;
        $portfolion->link = $request->link;
        $portfolion->thumbnail = $thumbName;
        $portfolion->dimage_one = $firstImageName;
        $portfolion->dimage_two = $secondImageName;
        $portfolion->save();

        return redirect()->route('portfolio.index')->with('successMsg','Team Member Successfully Saved!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = DB::table('portfolios')
            ->join('categories', 'portfolios.category', '=', 'categories.id')
            ->select('portfolios.*', 'categories.cat_name')
            ->where('portfolios.id',$id)
            ->first();

        $share = Share::currentPage()
                ->facebook()
                ->twitter()
                ->googlePlus();

        // Get the current user that will be the origin of our operations
        $currentUser = Portfolio::find($id);

        // Get ID of a User whose autoincremented ID is less than the current user, but because some entries might have been deleted we need to get the max available ID of all entries whose ID is less than current user's
        $previous = Portfolio::where('id', '<', $currentUser->id)->max('id');
        $prevTitle = Portfolio::find($previous);

        // Same for the next user's id as previous user's but in the other direction
        $next = Portfolio::where('id', '>', $currentUser->id)->min('id');
        $nextTitle = Portfolio::find($next);

        return view('pages.singlePortfolio',compact('portfolio','share','next','nextTitle','previous','prevTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        $categories = Category::all();
        return view('admin.portfolio.edit',compact('portfolio','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'          => 'required',
            'category'      => 'required',
            'client'        => 'required',
            'heading_one'   => 'required',
            'heading_two'   => 'required',
            'para_one'      => 'required',
            'para_two'      => 'required',
            'link'          => 'required',
            'thumbnail'     => 'mimes:jpg,jpeg,png',
            'pimage_one'    => 'mimes:jpg,jpeg,png',
            'pimage_two'    => 'mimes:jpg,jpeg,png',
        ]);

        /*return $request->all();*/

        $thumbnail = $request->file('thumbnail');
        $firstImage = $request->file('pimage_one');
        $secondImage = $request->file('pimage_two');
        $slug = str_slug($request->heading_one);

        $portfolion = Portfolio::find($id);

        //Thumbnail

        if (isset($thumbnail)){
            $currentDate = Carbon::now()->toDateString();
            $thumbName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$thumbnail->getClientOriginalExtension();

            if (!file_exists('uploads/portfolio/')){
                mkdir('uploads/portfolio',007,true);
            }else{
                $thumbnail->move('uploads/portfolio',$thumbName);
            }

        }else{
            $thumbName = $portfolion->thumbnail;
        }

        //First Paragraph Image

        if (isset($firstImage)){
            $currentDate = Carbon::now()->toDateString();
            $firstImageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$firstImage->getClientOriginalExtension();

            if (!file_exists('uploads/portfolio')){
                mkdir('uploads/portfolio',007,true);
            }else{
                $firstImage->move('uploads/portfolio',$firstImageName);
            }

        }else{
            $firstImageName = $portfolion->dimage_one;
        }

        //Second Paragraph Image

        if (isset($secondImage)){
            $currentDate = Carbon::now()->toDateString();
            $secondImageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$secondImage->getClientOriginalExtension();

            if (!file_exists('uploads/portfolio')){
                mkdir('uploads/portfolio',007,true);
            }else{
                $secondImage->move('uploads/portfolio',$secondImageName);
            }

        }else{
            $secondImageName = $portfolion->dimage_two;
        }

        $portfolion->name = $request->name;
        $portfolion->client = $request->client;
        $portfolion->category = $request->category;
        $portfolion->dheading_one = $request->heading_one;
        $portfolion->dheading_two = $request->heading_two;
        $portfolion->dpara_one = $request->para_one;
        $portfolion->dpara_two = $request->para_two;
        $portfolion->link = $request->link;
        $portfolion->thumbnail = $thumbName;
        $portfolion->dimage_one = $firstImageName;
        $portfolion->dimage_two = $secondImageName;
        $portfolion->save();

        return redirect()->route('portfolio.index')->with('successMsg','Team Member Successfully Saved!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);

        //Delete Thumbnail
        if (file_exists('uploads/portfolio/'.$portfolio->thumbnail)){
            unlink('uploads/portfolio/'.$portfolio->thumbnail);
        }

        //Delete First Image
        if (file_exists('uploads/portfolio/'.$portfolio->dimage_one)){
            unlink('uploads/portfolio/'.$portfolio->dimage_one);
        }

        //Delete Second Image
        if (file_exists('uploads/portfolio/'.$portfolio->dimage_two)){
            unlink('uploads/portfolio/'.$portfolio->dimage_two);
        }

        $portfolio->delete();

        return redirect()->back()->with('successMsg','Slider Deleted Successfully!!');
    }
}
