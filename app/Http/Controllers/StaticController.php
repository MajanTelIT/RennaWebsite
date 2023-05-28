<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StaticPages;
use Response;


class StaticController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $static = StaticPages::orderBy('updated_at', 'DESC')->get();

        return view('admin.static.index', ['static' => $static]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $static = StaticPages::orderBy('id','desc');
        return view('admin.static.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $static = new StaticPages();
        $static->title = $request->title;
        $static->url = $request->url;
        $static->description = $request->description;
        $static->status = 0;
        $static->arabic_description = $request->description_arabic;
        $static->save();

        return redirect()->route('staticList');  
   
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
        try{
            $static = StaticPages::find($id);

            return view('admin.static.edit', ['title' => 'static' ,'static' => $static]);

        }
        catch(Exception $e) {
            return \Response::json(['error'=> ['responseMessage'=>$e->getMessage()]], HttpResponse::HTTP_CONFLICT)->setCallback(Input::get('callback'));
        }
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
        $validatedData = $request->validate([    
            'title' => 'required|min:6|max:20',
            'url'     => 'required|min:2|max:20',

          ]);

        $static = StaticPages::find($id);
        $static->title = $request->title;
        $static->url = $request->url;
        $static->status = 0;
        $static->description = $request->description;
        $static->arabic_description = $request->arabic_description;
        $static->save();  
        return redirect()->route('staticList');  
      
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

     /**
     * Show the form for editing the specified resource.
     *
     * @param  changeStatus
     * @return \Illuminate\Http\Response
     */


    public function blockStatic(Request $request,$id)
    {

        $static = StaticPages::where('id',$id)->first();
        if ($static) {
            $status = '2';
            $static = StaticPages::where('id',$request->id)->first();
            $static->status = $status;
            $static->save();

            return Response::json(["status"=>200,"msg"=>"success"],200);

        }else{

            return Response::json(["status"=>401,"msg"=>"success"],200);
        }
    }



    public function unblockStatic(Request $request,$id)
    {

        $static = StaticPages::where('id',$id)->first();
        if ($static) {
            $status = '1';
            $static = StaticPages::where('id',$id)->first();
            $static->status = $status;
            $static->save();

            return Response::json(["status"=>200,"msg"=>"success"],200);

        }else{

            return Response::json(["status"=>401,"msg"=>"success"],200);
        }
    
    }
}
