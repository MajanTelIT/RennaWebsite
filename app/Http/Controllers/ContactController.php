<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Response;


class ContactController extends Controller
{

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('admin.contactus.view');
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coverage()
    {
        return view('admin.coverage');
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function view($id)
    {
        try{

            $id=1;
            $contact = Contact::find($id);

            return view('admin.contactus.view', ['title' => 'contact Us' ,'contact' => $contact]);

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
            'phone_number' => 'required|min:6|max:20',
            'fax_number'     => 'required|min:2|max:20',

          ]);
        $id=1;
        $contact = Contact::find($id);
        $contact->phone_number = $request->phone_number;
        $contact->fax_number = $request->fax_number;
        $contact->description = $request->address;
        $contact->save();  
        return redirect('/admin/contact/1');
      
    }
}

