<?php

namespace App\Http\Controllers;
use File;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserController extends Controller
{
   

public function index()
{
    $data = User::all();
    return view('user.index', compact('data'));
}
    
    public function userStore(Request $request){
            $input=$request->all();
            if($request->hasFile('image')){
                $imageName = time().'.'.$request->image->extension();  
     
                $request->image->move(public_path('images'), $imageName); 
                $input['image']=$imageName;  
            }
            else{
                $input['image']='';
            }

            User::create($input);

            return redirect()
            ->back()
            ->with('message','User added successfully');
        }
        public function userShow()
        {
            $data = User::all();
            return view('show',compact('data'));
        }

        public function userDelete($id)
        { 

        $data=User::find($id);
        $imageInfo = 'images/'.$data->image;
        if(File::exists($imageInfo)){
            File::delete($imageInfo);
        }
        $data->delete();
        
       return redirect()->back()->with('success','user deleted successfully');
       
       }
       
       public function userEdit($id)
       {

        $data = User::find($id);
        return view('edit',compact('data'));
        
       }
       public function addDetail(Request $request, $id)
       {
        
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $image=$request->file;
        if($image)
        {
            unlink($imagename);

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('images',$imagename);
          $user->image=$imagename;
        }
        
          $user->save();
   
   
           return redirect('show')->with('info','user edit successfully');
       }



}