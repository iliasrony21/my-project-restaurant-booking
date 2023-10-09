<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chefs;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = Chefs::all();
       return view('admin.chef.index',compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chef.create');
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
            'title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
       ]);
            $image = $request->file('image');
            $slug = Str::slug($request->name);
       if(isset($image))
       {
        $currentData = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentData.'.'.$image->getClientOriginalExtension();
        if(!file_exists('uploads/chef'))
        {
            mkdir('uploads/chef',077,true);
        }
        $image->move('uploads/chef',$imagename);
       }
       else{
        $imagename = 'default.png';
       }
       $chef = new Chefs();
       $chef->name = $request->name;
       $chef->title = $request->title;
       $chef->image = $imagename;
       $chef->save();
       return redirect()->route('chef.index');
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
        $chef = Chefs::find($id);
        return view('admin.chef.edit',compact('chef'));
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
            'title' => 'required',

       ]);
            $image = $request->file('image');
            $slug = Str::slug($request->name);

            $chef = Chefs::find($id);

       if(isset($image))
       {
        $currentData = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentData.'.'.$image->getClientOriginalExtension();
        if(!file_exists('uploads/chef'))
        {
            mkdir('uploads/chef',077,true);
        }
        $image->move('uploads/chef',$imagename);
       }
       else{
        $imagename = $chef->image;
       }

       $chef->name = $request->name;
       $chef->title = $request->title;
       $chef->image = $imagename;
       $chef->save();
       return redirect()->route('chef.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chef = Chefs::find($id);
        if(file_exists('uploads/chef/'.$chef->image)){
            unlink('uploads/chef/'.$chef->image);
        }
        $chef->delete();
        return redirect()->route('chef.index');
    }
}
