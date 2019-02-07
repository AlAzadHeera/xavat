<?php

namespace App\Http\Controllers\Admin;

use App\Say;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Say::all();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'designation' => 'required',
            'testimonial' => 'required',
            'avatar'  => 'required | mimes:jpg,jpeg,png',
        ]);


        $avatarImage = $request->file('avatar');
        $slug = str_slug($request->name);

        //Avatar

        if (isset($avatarImage)){
            $currentDate = Carbon::now()->toDateString();
            $avatar = $slug.'-'.$currentDate.'-'.uniqid().'.'.$avatarImage->getClientOriginalExtension();

            if (!file_exists('uploads/testimonail/')){
                mkdir('uploads/testimonail',007,true);
            }else{
                $avatarImage->move('uploads/testimonail',$avatar);
            }

        }else{
            $avatar = 'default.png';
        }


        $testimonial = new Say();
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->testimonial = $request->testimonial;
        $testimonial->avatar = $avatar;
        $testimonial->save();

        return redirect()->route('testimonial.index')->with('successMsg','Testimonial Successfully Saved!!!');
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
    public function edit($id)
    {
        $testimonial = Say::find($id);
        return view('admin.testimonial.edit',compact('testimonial'));
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
            'name' => 'required',
            'designation' => 'required',
            'testimonial' => 'required',
            'avatar'  => 'mimes:jpg,jpeg,png',
        ]);


        $avatarImage = $request->file('avatar');
        $slug = str_slug($request->name);

        $testimonial = Say::find($id);

        //Avatar

        if (isset($avatarImage)){
            $currentDate = Carbon::now()->toDateString();
            $avatar = $slug.'-'.$currentDate.'-'.uniqid().'.'.$avatarImage->getClientOriginalExtension();

            if (!file_exists('uploads/testimonail/')){
                mkdir('uploads/testimonail',007,true);
            }else{
                $avatarImage->move('uploads/testimonail',$avatar);
            }

        }else{
            $avatar = $testimonial->avatar;
        }



        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->testimonial = $request->testimonial;
        $testimonial->avatar = $avatar;
        $testimonial->save();

        return redirect()->route('testimonial.index')->with('successMsg','Testimonial Successfully Saved!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $testimonial = Say::find($id);

        //Delete Second Image
        if (file_exists('uploads/testimonial/'.$testimonial->avatar)){
            unlink('uploads/testimonial/'.$testimonial->avatar);
        }

        $testimonial->delete();

        return redirect()->back()->with('successMsg','Testimonial Deleted Successfully!!');
    }
}
