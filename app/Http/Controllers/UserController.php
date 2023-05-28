<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userList()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Createuser()
    {
        return view('admin.users.add');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editUser($id)
    {   
       try{
        $user = User::find($id);

        return view('admin.users.edit', ['title' => 'user' ,'user' => $user]);

        }
        catch(Exception $e) {
            return \Response::json(['error'=> ['responseMessage'=>$e->getMessage()]], HttpResponse::HTTP_CONFLICT)->setCallback(Input::get('callback'));
        }
    }

    public function storeUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:3|max:16',
            'phonenumber'     => 'required|min:6|max:10',
            'email' => 'required|email|unique:users',
        ]);


        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            try{

                $password = 'Renna@cmp@2021';
                $addUser = new User();
                $addUser->name          = $request->username;
                $addUser->email         = $request->email;
                $addUser->msisdn        = $request->phonenumber;
                $addUser->password      = Hash::make($password);
                $addUser->status        = 'A';
                $addUser->role_id       = $request->role_id;
                $addUser->save();

                //$emailData  = array('name'=>$addUser->name,'url'=>$url,'email'=>$request->email_id,'subject'=>$subject,'password'=>$password,'img'=> url('/assets/images/logo.png'));          
                     
                //$a = Mail::send('user.email.account_creation',  $emailData , function ($message) use ($email, $subject) {
                      // $message->to($email);
                       //$message->subject($subject);
                    
                //});
                
                $message = "User created successfully.";
                Toastr::success($message, $title = "Branch", $options = ["closeButton"=>true,"timeOut"=> "0"] );
                Toastr::clear();

            } catch(Exception $e){
                
               Toastr::error('Something went wrong server not responding.', $title = "", $options = ["closeButton"=>true,"timeOut"=> "0"] );
                Toastr::clear();
                return redirect()->back();
            }
        }
        $message = "User Added successfully";
        Toastr::success($message, $title = "Added successfully", $options = [] );
        Toastr::clear();
        return redirect('/user/list');
    }

    public function UpdateUser(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:3|max:16',
            'phonenumber'     => 'required|min:6|max:10',
            'email' => 'required|email',
        ]);


        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        if ($validator->fails()) {
           return redirect('edit/user/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        }else{

            try{

                $editUser                = User::find($id);    
                $editUser->name          = $request->username;
                $editUser->email         = $request->email;
                $editUser->msisdn        = $request->phonenumber;
                //$editUser->password      = $pass;
                $editUser->status        = $request->status;
                $editUser->role_id       = $request->role_id;
                $editUser->save();

                //$emailData  = array('name'=>$edituser->name,'url'=>$url,'email'=>$request->email_id,'subject'=>$subject,'password'=>$password,'img'=> url('/assets/images/logo.png'));          
                     
                //$a = Mail::send('user.email.account_creation',  $emailData , function ($message) use ($email, $subject) {
                      // $message->to($email);
                       //$message->subject($subject);
                    
                //});
                
                $message = "User created successfully.";
                Toastr::success($message, $title = "Branch", $options = ["closeButton"=>true,"timeOut"=> "0"] );
                Toastr::clear();

            } catch(Exception $e){
                
               Toastr::error('Something went wrong server not responding.', $title = "", $options = ["closeButton"=>true,"timeOut"=> "0"] );
                Toastr::clear();
                return redirect()->back();
            }
        }
        $message = "User Added successfully";
        Toastr::success($message, $title = "Added successfully", $options = [] );
        Toastr::clear();
        return redirect('/admin/user/list');
    }
}
