<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Attendence;

class attendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $attendence = Attendence::all();
        if ( count($attendence) > 0){
        return view('attendence.index', compact('attendence'));
        }else{
            return " Error :: Data not found";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('attendence.create');
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
              
              
              'sno' => 'required',
              'session' => 'required',
               'date_of_attendence' => 'required',
               'attendence' => 'required'
            ]);
        
        Attendence::create($request->all());
         return redirect('attendence');
        
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
        //
    }
    
    public function show_attendence_json($id)
    {
        //
        $attendence_single = Attendence::where('sno','=',$id)->get();
        if (count($attendence_single) > 0){
             return json_encode($attendence_single );
        }else {
           return json_encode("Error :: Key not found.");
        }      
    }    
}
