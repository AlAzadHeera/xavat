<?php

namespace App\Http\Controllers\Admin;

use App\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partner.index',compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
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
            'logo'  => 'required | mimes:jpg,jpeg,png',
        ]);


        $logoImage = $request->file('logo');
        $slug = str_slug($request->name);


        //Avatar

        if (isset($logoImage)){
            $currentDate = Carbon::now()->toDateString();
            $logo = $slug.'-'.$currentDate.'-'.uniqid().'.'.$logoImage->getClientOriginalExtension();

            if (!file_exists('uploads/partner/')){
                mkdir('uploads/partner',007,true);
            }else{
                $logoImage->move('uploads/partner',$logo);
            }

        }else{
            $logo = "default.png";
        }


        $partner = new Partner();
        $partner->name = $request->name;
        $partner->logo = $logo;
        $partner->save();

        return redirect()->route('partner.index')->with('successMsg','Testimonial Successfully Saved!!!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);

        //Delete Second Image
        if (file_exists('uploads/partner/'.$partner->logo)){
            unlink('uploads/partner/'.$partner->logo);
        }

        $partner->delete();

        return redirect()->back()->with('successMsg','Partner Deleted Successfully!!');
    }
}
