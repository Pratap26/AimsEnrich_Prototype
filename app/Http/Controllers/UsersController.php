<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\User;

class UsersController extends Controller
{
    public function profile()
    {
     return view('pages.profile');
    }


     public function profile_Update(Request $request){

        $id = auth::user() -> id;
        $update_profile=User::find($id);
        $update_profile->name=$request->get('name');
       
        $update_profile->phone_number=$request->input('phone_number');
        $update_profile->city=$request->input('city');
        $update_profile->update();
        $update_profile->save();

     
         return redirect()->to('/profile');
    }
     public function password_update(Request $request){
        
        if($request->get('new_password'))
        {
        $id = auth::user() -> id;
        $update_password=User::find($id);
        $update_password->password=bcrypt($request->get('new_password'));
        $update_password->update();
        $update_password->save();
        Auth::logout();
        return redirect()->to('login');
        }
       return redirect()->to('/profile'); 
    }
    public function delete(Request $request)
      {
        $id=auth::user()->id;
        $post=User::find($id);
        $post->delete();
        return redirect()->to('/'); 
      }
     public function profile_picture()
     {
     	 return view('pages.profile_picture');
     }
       public function profile_picture_update(Request $request){
        $img = $request->file('profile_picture');

        $imagename = time().$img->getClientOriginalName();

        $img->move(public_path().'/profile_pic', $imagename);

        $user = User::find(Auth::user()->id);
        $user->profile_picture = $imagename;
        $user->update();
        $user->save();
        return redirect()->to('profile_picture');
    }
}
