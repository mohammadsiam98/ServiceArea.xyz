<?php

namespace App\Http\Controllers;
use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AboutPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $abouts = About::all();
        return view ('pages.abouts.list',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[
            'details' => 'required|string',
            

        ]);

        $abouts = new About;
        
        $abouts->details = $request->details;

        if($request->file('download_cv')){
            $pdf_file = $request->file('download_cv');
            $pdf_file->storeAs('public/pdf/','download_cv.'.$pdf_file->getClientOriginalExtension());
            $abouts->download_cv ='storage/pdf/download_cv.'.$pdf_file->getClientOriginalExtension();
            
        };

       

        $abouts->save();
        
        return redirect()->route('admin.abouts.create')->with('success','New About me created Successfully');
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
        $abouts = About::find($id);
        return view('pages.abouts.edit',compact('abouts'));
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
        $this->validate($request,[
            'details' => 'required|string',
            'download_cv' => 'required|string',
           
            ]);

        $abouts = About::find($id);
        $abouts->details = $request->details;
      
        
        if($request->file('download_cv')){
            $download_cv  = $request->file('download_cv');
            Storage::putFile('public/pdf/',$image);
            $portfolios->image ="storage/pdf/";
        }
        $portfolios->save();
        
        return redirect()->route('admin.abouts.create')->with('success','New about me details updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $abouts = About::find($id);
        $abouts->delete();
        return redirect()->route('admin.abouts.list')->with('success',"abouts Deleted Successfully");
    }
}
