<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Newsfeed;

class newsFeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $news_feeds = Newsfeed::all();
        if (count($news_feeds) > 0){
        return view('newsfeed.index', compact('news_feeds'));
        }else{
            return "Data not found in the database";
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
        return view('newsfeed.create');
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
              
              
               'title' => 'required',
               'priority' => 'required',
               'date_of_newsfeed' => 'required',
               'content' => 'required',
            ]);
        
        $newsfeed = new Newsfeed;
        
        $newsfeed->title = $request->title;
        $newsfeed->priority = $request->priority;
        $newsfeed->date_of_newsfeed = $request->date_of_newsfeed;
        $newsfeed->content = $request->content;
        
        $newsfeed->save();
        
        return redirect('/newsfeed');
        
    
        
        
//        $input = $request->all();
//        Newsfeed::create($input);
        
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
         $newsfeed = Newsfeed::findOrFail($id);
        if ( count($newsfeed) > 0){
         return view('newsfeed.show',compact('newsfeed'));
        }else {
            return "Error :: Data not found";
        }
        
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
        $news_feed_single = Newsfeed::findOrFail($id);
        return view('newsfeed.edit', compact('news_feed_single'));
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
        $newsfeed_edited = Newsfeed::findOrFail($id);
          $newsfeed_edited->update($request->all());
          return redirect('/newsfeed');
        
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
        
        $delete_newsfeed = Newsfeed::findOrFail($id);
        $delete_newsfeed->delete();
        return redirect('/newsfeed');
        
    }
    
    public function show_new_feed($id)
    {
        //
    }
}
