<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Response;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::orderBy('updated_at', 'DESC')->get();

        return view('admin.banner.index', ['banner' => $banner]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $banner = Banner::orderBy('id','desc');
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([    
            'banner_image' => 'required|mimes:jpeg,bmp,png,jpg',
            'banner_name'     => 'required|min:5|max:20',

          ]);
      
        $banner = new Banner();
        $banner->banner_name = $request->banner_name;
        $banner->meta_title = $request->meta_title;
        $banner->meta_description = $request->meta_description;
        $banner->meta_keywords = $request->meta_keywords;
        $banner->status = $request->status;
        $banner->language = $request->language;

        if(!(empty($request->banner_image))){
            if($request->hasFile('banner_image')){
                    $photo = $request->file('banner_image');  
                    $image  = time().'.'.$photo->getClientOriginalExtension();
                    $destinationPath = public_path('/images/banner');
                    $photo->move($destinationPath,$image);
                    $banner->image_path = ('banner/').$image;   
                 }


                    $banner->save();
                   // Toastr::success('Banner Added successfully.', $title = "", $options = ["positionClass"=>"toast-top-right","timeOut"=>5000] ); 
                        return redirect()->route('bannersList');   
        }
        else
        {
         //Toastr::warning('Please Select any image.', $title = "", $options = ["positionClass"=>"toast-top-right","timeOut"=>5000] ); 
                    return redirect('/admin/add/banner');   
        }
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
            $banner = Banner::find($id);

            return view('admin.banner.edit', ['title' => 'banner' ,'banner' => $banner]);

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
            'banner_image' => 'required|mimes:jpeg,bmp,png,jpg',
            'banner_name'     => 'required|min:5|max:20',

          ]);
      
        $banner = Banner::find($id);
        $banner->banner_name = $request->banner_name;
        $banner->meta_title = $request->meta_title;
        $banner->meta_description = $request->meta_description;
        $banner->meta_keywords = $request->meta_keywords;
        $banner->status = $request->status;
        $banner->language = $request->language;

        if(!(empty($request->banner_image))){
            if($request->hasFile('banner_image')){
                    $photo = $request->file('banner_image');  
                    $image  = time().'.'.$photo->getClientOriginalExtension();
                    $destinationPath = public_path('/images/banner');
                    $photo->move($destinationPath,$image);
                    $banner->image_path = ('banner/').$image;   
                 }

                    $banner->save();
                   // Toastr::success('Banner Added successfully.', $title = "", $options = ["positionClass"=>"toast-top-right","timeOut"=>5000] ); 
            return redirect()->route('bannersList');   
        }
        else
        {
         //Toastr::warning('Please Select any image.', $title = "", $options = ["positionClass"=>"toast-top-right","timeOut"=>5000] ); 
            return redirect('/admin/add/banner');   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ChangeStatus(Request $request)
    {
        try 
        {                      
            $banner = Banner::where('id',$id);
            $banner->status = $request->status;
            $banner->save();
                

        } catch(Exception $e) {
            return \Response::json(['error'=> ['responseMessage'=>$e->getMessage()]], HttpResponse::HTTP_CONFLICT)->setCallback(Input::get('callback'));
        }
    }

     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  changeStatus
     * @return \Illuminate\Http\Response
     */


    public function blockBanner(Request $request,$id)
    {

        $banner = Banner::where('id',$id)->first();
        if ($banner) {
            $status = '2';
            $banner = Banner::where('id',$request->banner_id)->first();
            $banner->status = $status;
            $banner->save();

            return Response::json(["status"=>200,"msg"=>"success"],200);

        }else{

            return Response::json(["status"=>401,"msg"=>"success"],200);
        }
    }



    public function unblockBanner(Request $request,$id)
    {

        $banner = Banner::where('id',$id)->first();
        if ($banner) {
            $status = '1';
            $banner = Banner::where('id',$id)->first();
            $banner->status = $status;
            $banner->save();

            return Response::json(["status"=>200,"msg"=>"success"],200);

        }else{

            return Response::json(["status"=>401,"msg"=>"success"],200);
        }
    
    }
}
