<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Team::all();
        return view('admin.team.members',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'fname' => 'required',
            'email' => 'required | email',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'image'       => 'required | mimes: jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->fname);

        if (isset($image)){
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/team')){
                mkdir('uploads/team',007,true);
            }else{
                $image->move('uploads/team',$imagename);
            }

        }else{
            $imagename = 'default.png';
        }

        $team = new Team();
        $team->name = $request->fname;
        $team->email = $request->email;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->image = $imagename;
        $team->save();
        return redirect()->route('team.index')->with('successMsg','Team Member Successfully Saved!!!');
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
        $members = Team::find($id);
        return view('admin.team.edit',compact('members'));
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
            'fname' => 'required',
            'email' => 'required | email',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'image'       => 'mimes: jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->fname);

        $team = Team::find($id);

        if (isset($image)){
            $currentDate =  Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/team')){
                mkdir('uploads/team',007,true);
            }else{
                $image->move('uploads/team',$imagename);
            }

        }else{
            $imagename = $team->image;
        }


        $team->name = $request->fname;
        $team->email = $request->email;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->image = $imagename;
        $team->save();
        return redirect()->route('team.index')->with('successMsg','Team Member Successfully Saved!!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        if (file_exists('uploads/team/'.$team->image)){
            unlink('uploads/team/'.$team->image);
        }
        $team->delete();
        return redirect()->back()->with('successMsg','Dish Image Deleted Successfully!!');
    }
}
